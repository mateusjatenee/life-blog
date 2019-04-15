<?php

use Wink\WinkPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('blog.index', [
        'posts' => WinkPost::with('tags')->live()->orderBy('published_date', 'DESC')->paginate(12),
    ]);
});

Route::get('posts/{post}', function ($post) {
    return view('blog.show', [
        'post' => WinkPost::whereSlug($post)->firstOrFail(),
    ]);
})->name('blog.posts.show');

Route::get('search/{tag}', function ($tag) {
    return WinkPost::whereHas('tags', function ($query) use ($tag) {
        return $query->where('slug', $tag);
    });
})->name('search');
