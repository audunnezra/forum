<?php

Auth::routes();

/*Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function () {
	return view('threads.create');
});
*/

Route::get('/', function () {
	return redirect('home');
});
Route::get('/home', function () {
	return("home");
});
Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');