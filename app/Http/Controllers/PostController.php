<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function edit($postId)
    {
        $post = Post::find($postId);
        // return view('edit-post', compact('post'));
    }
}
