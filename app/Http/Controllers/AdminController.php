<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function getIndex()
    {
        //fetch posts & messages
        return view('admin.index');
    }
}
