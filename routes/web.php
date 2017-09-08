<?php

Auth::routes();


Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/', function() {
	return view('messages.hello');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});
