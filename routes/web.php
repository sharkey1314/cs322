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



Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}','TasksController@show');
Route::get('/posts', 'PostController@index');
// controller => PostController, eloquent model => Post, migration => create_posts_table
