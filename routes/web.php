<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    $posts = Post::latest()->paginate();
    return view('welcome', compact('posts') );
})->name("/");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('posts', PostController::class)
->except([
    'index', 'show'
])
->middleware(['auth']);


Route::resource('comments', CommentController::class)
->except([
   // 'index', 'show'
])
->middleware(['auth']);

Route::resource('users', UserController::class)
->except([
   // 'index', 'show'
])
->middleware(['auth']);



Route::resource('options', OptionController::class)
->except([
  //  'index', 'show'
])
->middleware(['auth']);

Route::get('posts', [PostController::class,'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class,'show'])->name('posts.show');

require __DIR__.'/auth.php';
