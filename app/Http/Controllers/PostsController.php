<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class PostsController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => WinkPost::with('tags')->live()->orderBy('publish_date', 'DESC')->paginate(12),
        ]);
    }

    public function show($post)
    {
        return view('blog.show', [
            'post' => WinkPost::whereSlug($post)->firstOrFail(),
        ]);
    }
}
