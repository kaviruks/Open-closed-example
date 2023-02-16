<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        PostService::create($request);

        return redirect()->route('posts.index')->withMessage('Post created successfully.');
    }
}
