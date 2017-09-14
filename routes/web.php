<?php

Auth::routes();

Route::get('/', 'GreetingController@greeting');

Route::get('/threads', 'ThreadsController@index');
Route::get('threads/create', 'ThreadsController@create');
Route::get('threads/{id}', 'ThreadsController@show');

// Route::get('/', function() {
// 	$name = "Aleksei";
// 	return view('messages.hello' , compact("name"));
// });


Route::get('/greeting/{id}', function($id) {
	$greetings = ["Velkominn á síðuna", "Bonjour", "Siema", "Здра́вствуйте", "Welcome on the site"];
	return view('messages.greeting', ["greeting" => $greetings[$id]]);
})->where(['id' => '[0-4]']);

// Route::get('/greeting/{id}/{count}', function($id, $count) {
// 	return view('messages.greeting', compact("id" , "count"));
// })->where(['id' => '[0-9]+' , 'count' => '[0-9]+']);
