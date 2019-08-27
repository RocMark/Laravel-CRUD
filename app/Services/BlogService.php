<?php

namespace App\Services;

use App\Repositories\BlogRepository;
use App\Repositories\TagRepository;
use Illuminate\Support\Facades\Validator;

class BlogService
{
    public static function indexBlog($data)
    {
        $blogs = BlogRepository::searchBlog($data);
        $tags = TagRepository::getTag();
        return ['blogs' => $blogs, 'tags' => $tags];
    }

    public static function updateBlog($data)
    {
        BlogRepository::getBlog($data['id']);
        BlogRepository::updateBlog($data);
    }

    public static function postBlog($data)
    {
        $result = Validator::make($data, [
            'title' => 'required',
            'userId' => 'required',
            'content' => 'required',
            'tag' => 'required',
        ]);

        if ($result->fails()) {
            return false;
        }

        BlogRepository::postBlog($data);
        return true;
    }
}
