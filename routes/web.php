<?php

/* url: localhost:8000 */
Route::get('tasks', function () {
    # -- get all row from tasks table
    $tasks = App\Task::all();
    # -- return view including tasks
    return view('tasks.index', compact('tasks'));
});

/* url: localhost:8000/tasks/{taskId} */
Route::get('tasks/{task}', function ($id) {
    # -- find a task by its id
    $task = App\Task::find($id);
    # -- return view including task
    return view('tasks.show', compact('task'));
});
