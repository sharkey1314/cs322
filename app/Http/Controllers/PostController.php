<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        return view('posts.index');
    }
    public function login() {
        return view('posts.login');
    }

    public function show() {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // create post using request data
        // save to database
        // redirect
        dd(request('username'));
    }

    // index is /tasks
    // create is /tasks/create
    // store is posts /tasks
    // show($id) is get posts/{id}
    // get /tasks/id/edit edit(id)
    // update (request, id) patch /tasks/id
    //delete(id) delete tasks/id
}
