<?php

Auth::routes();

Route::get('/', 'GreetingController@greeting');
Route::get('/greeting/{id}', 'GreetingController@greetindex')->where(['id' => '[0-4]']);


Route::get('/threads', 'ThreadsController@index');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/create', 'ThreadsController@create')->middleware("auth");
Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/comments', 'CommentController@index');
Route::post('/comments', 'CommentController@store')->middleware("auth");
Route::get('/comments/{id}', 'CommentController@show')->middleware("auth");

Route::get('/profile', 'ProfileController@index');
