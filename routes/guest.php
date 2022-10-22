<?php

use App\Http\Controllers\Guest\PostController as GuestPostController;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::latest()->paginate();
    return view('welcome', compact('posts'));
})->name("/");


Route::get('posts', [GuestPostController::class,'index'])->name('guest.posts.index');
Route::get('posts/{post}', [GuestPostController::class,'show'])->name('guest.posts.show');
