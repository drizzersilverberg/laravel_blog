<?php

/* url: localhost:8000 */
Route::get('/', function(){
    return view('welcome');
});

/* url: localhost:8000/tasks */
Route::get('tasks', 'TasksController@index');
/* url: localhost:8000/tasks/{taskId} */
Route::get('tasks/{task}', 'TasksController@show');

/* url: localhost:8000/posts */
Route::get('posts', 'PostsController@index');

