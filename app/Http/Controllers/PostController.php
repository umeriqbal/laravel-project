<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        //fetch posts and Paginate
        return view('frontend.blog.index');
    }
    
    public function getSinglePost($post_id, $end = 'frontend')
    {
        //get parameters
        //fetch the post
        return view($end . '.blog.single');
    }
}