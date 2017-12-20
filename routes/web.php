<?php

# temporary placed here ...
App::singleton('App\Billing\Stripe', function() {
    return new \App\Billing\Stripe(config('services.stripe.secret'));
});

/* url: localhost:8000 */
Route::get('/', 'PostsController@index')->name('home');

/* url: localhost:8000/posts */
Route::get('posts', 'PostsController@index');

Route::get('posts/create', 'PostsController@create');

Route::post('posts', 'PostsController@store');

Route::get('posts/{post}', 'PostsController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');
