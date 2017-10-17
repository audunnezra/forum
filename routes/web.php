<?php

Auth::routes();

Route::get('/', function(){

	return redirect('/threads');
	
});

Route::get('/threads', 'ThreadsController@index');

Route::post('/threads', 'ThreadsController@store');

Route::get('/threads/create', 'ThreadsController@create');

Route::post('threads/{id}/comment', 'CommentsController@store');

Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/profile/{user_id}', 'ProfileController@show');