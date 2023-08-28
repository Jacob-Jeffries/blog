<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{

    public $title;
    public $author;
    public $date;
    public $filename;
    public $fileextension;
    public $body;

    public function __construct($title, $author, $date, $fileName, $fileExtension, $body)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->filename = $fileName;
        $this->fileextension = $fileExtension;
        $this->body = $body;
    }

    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        $array = array_map(function ($file) {
            $info = get_meta_tags($file->getPathName());
            $info['body'] = $file->getContents();
            return $info;
        }, $files);

        // dd($array);

        return collect($array)
            ->map(fn($file)=>new Post(
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
