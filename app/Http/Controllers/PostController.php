<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // controller action return views
    public function index() {
        return view('posts.index');
    }
}
