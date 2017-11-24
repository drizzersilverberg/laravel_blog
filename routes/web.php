<?php

/* url: localhost:8000 */
Route::get('tasks', 'TasksController@index');
/* url: localhost:8000/tasks/{taskId} */
Route::get('tasks/{task}', 'TasksController@show');

