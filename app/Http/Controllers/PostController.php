<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        //dd(request(['title', 'body']));
        // still fail.... need to do something
        // mass assigning all of the fields ... cannot submit any form data
        $this->validate(request(),[
            'username' =>'required',
            'password' => 'required'
            'email' => 'required'
        ]);
        Post::create([
            'name' => request('username'),
            'password' => request('password')
            'email' =>request('email')
        ]);
        /*$post = new Post;
        $post->title = request('title');
        $post->body = request('body');*/

        //$post->save();
        return redirect('/posts');
    }



    // index is /tasks
    // create is /tasks/create
    // store is posts /tasks
    // show($id) is get posts/{id}
    // get /tasks/id/edit edit(id)
    // update (request, id) patch /tasks/id
    //delete(id) delete tasks/id
}
