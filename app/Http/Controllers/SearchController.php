<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{
    public function __invoke()
    {
        $posts = WinkPost::whereHas('tags', function ($query) use ($tag) {
            return $query->where('slug', $tag);
        });

        return view('blog.search.index', [
            'posts' => $posts,
        ]);
    }
}
