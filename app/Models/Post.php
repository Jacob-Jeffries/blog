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

    public static function find($slug)
    {
        // of all the blog posts find a post that matches the slug
        $posts = static::all();

        return array_filter($posts, function ($posts) use ($slug) {
            return array_map(function ($post) use ($slug) {
                if ($post['filename'] == $slug) {
                    return true;
                } else {
                    return false;
                }
            }, $posts);
        });

        // array_map(function ($post) use ($slug) {
        //     if ($post['filename'] == $slug) {
        //         return $post;
        //     };
        // }, $posts);
    }
}
