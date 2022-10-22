<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $posts = Post::paginate();
        return view('post.index', compact('posts'));
    }
}
