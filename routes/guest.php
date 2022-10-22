<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController ;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::latest()->paginate();
    return view('welcome', compact('posts'));
})->name("/");


Route::get('gallery', [GalleryController::class,'index'])->name('gallery.index');
Route::get('posts', [PostController::class,'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class,'show'])->name('posts.show');
