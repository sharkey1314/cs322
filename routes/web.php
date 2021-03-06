<?php

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

/*Route::get('/', function () {
    return view('index', [
        'name' => 'World'
    ]);
});

Route::get('/', function() {
    return view('index')->with('name', 'World');
}); */

/*Route::get('/', function() {

    $tasks = [
        'name' => 'World',
        'Go to the store',
        'Finish my stuff',
        'Clean the house'
    ];
    return view('index', compact('tasks'));
}); */

/*Route::get('/tasks', function() {
    $tasks = DB::table('tasks')->get();
    return view('tasks.index', compact('tasks'));
});*/



Route::get('/', 'PostController@index');
Route::get('/tasks/{task}','TasksController@show');
//Route::get('/posts', 'PostController@index');
Route::get('/posts/login', 'PostController@login');
Route::get('/task', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::get('/create', 'PostController@create');

// get/posts for all the posts
// get/posts/create to create a post
// POST /posts
// GET /posts/{id}/edit
// GET /posts/{id}
// DELETE /posts/{id} // trigger delete instead of show action
// controller => PostController, eloquent model => Post, migration => create_posts_table

Auth::routes();

Route::get('/home', 'HomeController@index');
