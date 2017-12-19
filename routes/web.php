<?php

/* url: localhost:8000 */
Route::get('/', function(){
    return view('welcome');
});

/* url: localhost:8000/posts */
Route::get('posts', 'PostsController@index');

Route::get('posts/create', 'PostsController@create');

Route::post('posts', 'PostsController@store');

