<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
    public function index() {

        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id) { // Task $task

        //$tasks = DB::table('tasks')->find($id);
        $tasks = Task::find($id);
        return view('tasks.show', compact('tasks'));
    }
}
