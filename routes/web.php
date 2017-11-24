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

/* url: localhost:8000 */
Route::get('tasks', function () {
    # -- get all row from tasks table
    $tasks = DB::table('tasks')->get();
    # -- return view including tasks
    return view('tasks.index', compact('tasks'));
});

/* url: localhost:8000/tasks/{taskId} */
Route::get('tasks/{task}', function ($id) {
    # -- find a task by its id
    $task = DB::table('tasks')->find($id);
    # -- return view including task
    return view('tasks.show', compact('task'));
});
