<?php

Auth::routes();

Route::get('/', 'GreetingController@greeting');
Route::get('/greeting/{id}', 'GreetingController@greetindex')->where(['id' => '[0-4]']);


Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/profile', 'ProfileController@index');
