<?php

namespace App\Http\Controllers;
use App\Post;

class AdminController extends Controller
{
    public function getIndex()
    {
        //fetch posts & messages
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('admin.index', ['posts' => $posts]);
    }
}
