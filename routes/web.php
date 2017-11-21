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
Route::get('/', function () {
    # -- ver.1
    // return view('welcome', ['name' => 'World']);

    # -- ver. 2
    // return view('welcome')->with('name', 'World');

    # -- ver. 3
    $name = 'Laracasts';
    $tasks = ['eat', 'code', 'sleep'];

    // return view('welcome', compact('name'));
    return view('welcome', compact('name','tasks'));
});

/* url: localhost:8000/about */
Route::get('about', function () {
    return view('about');
});
