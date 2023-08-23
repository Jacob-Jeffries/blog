<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        return array_map(function ($file) {
            $info = get_meta_tags($file->getPathName());
            $info['body'] = $file->getContents();
            return $info;
        }, $files);
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
        $info = [];

        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        } else {
            $info = get_meta_tags($path);
            $info['body'] = file_get_contents($path);
            return $info;
        }

        return $info;
    }
}
