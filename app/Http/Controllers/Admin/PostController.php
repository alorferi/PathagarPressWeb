<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;

use Redirect;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('post_date','desc')->paginate();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request =  $request->merge(['post_excerpt'=>'',
    'to_ping'=>'',
    'pinged'=>'',
    'post_content_filtered'=>'',
    ]);

        $post = Post::create($request->except('image'));

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            Image::createX($imageFile, $post, 1024);
        }

        // redirect
        Session::flash('message', "Successfully saved!");
        return Redirect::to(route('admin.posts.index', $post->id));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $authors = User::pluck('name', 'id')->prepend('Please Select...', null);

        $post_author = $post->post_author;

        return view('admin.post.edit', compact('post','authors','post_author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->except('image'));

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');

            if ($post->image==null) {
                Image::createX($imageFile, $post, 1024);
            } else {
                $post->image->updateX($imageFile);
            }
        }

        // redirect
        Session::flash('message', "Successfully saved!");
        return Redirect::to(route('admin.posts.index', $post->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
