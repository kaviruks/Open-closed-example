<?php

namespace App\Services;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;

class PostService
{
    public static function create(StorePostRequest $request)
    {
        Post::create($request->only('name', 'content'));
    }
}