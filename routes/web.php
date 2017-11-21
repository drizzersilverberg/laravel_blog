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
    return view('welcome');
});

/* url: localhost:8000/about */
Route::get('about', function () {
    return view('about');
});
