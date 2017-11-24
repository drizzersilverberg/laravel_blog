<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        # -- get all tasks
        $tasks = Task::all();
        # -- return view including tasks
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        # -- find a task by its id
        $task = Task::find($id);
        # -- return view including task
        return view('tasks.show', compact('task'));
    }
}