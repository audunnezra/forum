<?php

Auth::routes();


/*
Route::get('/greeting/{id}/{count}',function($id, $count){
	return view('greeting', compact('id'), compact('count'));
})->where(['id' => '[0-9]+' , 'count' => '[0-9]+']);

*/
Route::get('/threads', 'ThreadsController@index');

Route::get('/threads/create', 'ThreadsController@create');

Route::get('/threads/{id}', 'ThreadsController@show');