<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

/**
 * This is really the controller for the Post Model
 */
class Post_FS
{
    // With PHP 8 we can skip the initial property declaration and reassignment.
    public function __construct(public $title, public $author, public $date, public $fileName, public $fileExtension, public $body)
    {
    }

    public static function all()
    {
        // The Files facade gives us access to file & directory maipulation.
        $files = File::files(resource_path("posts/"));

        $array = array_map(function ($file) {
            // YAML front matter does this in one step.
            $info = get_meta_tags($file->getPathName());
            $info['body'] = $file->getContents();
            // dd($info);
            return $info;
        }, $files);

        // dd($array);

        return collect($array)
            ->map(fn($file)=>new Post_FS(
                $file['title'],
                $file['author'],
                $file['date'],
                $file['filename'],
                $file['fileextension'],
                $file['body'],
            ));
    }

    public static function sort($fileData)
    {
        $dates = array_map(function ($file) {
            return $file['date'];
        }, $fileData);

        array_multisort($dates, $fileData);

        return $fileData;
    }

    public static function find($slug)
    {
        $data = [];

        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        } else {
            $data = get_meta_tags($path);
            $data['body'] = file_get_contents($path);
            return $data;
        }

        return $data;
    }
}
