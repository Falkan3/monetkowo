<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('main.main');
});

Route::get('/kontakt', function () {
    return view('main.contact');
});

Route::post('/sendForm', 'ContactController@SendMail');

Auth::routes();

Route::get('/home', 'HomeController@index');
