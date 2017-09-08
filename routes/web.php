<?php

Auth::routes();


Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/', function() {
	$name = "Aleksei";
	return view('messages.hello' , compact("name"));
});

Route::get('/threads/create', function() {
	return view('threads.create');
});
