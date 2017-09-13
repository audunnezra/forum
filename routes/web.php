<?php

Auth::routes();



Route::get('/greeting/{id}/{count}',function($id, $count){
	return view('greeting', compact('id'), compact('count'));
})->where(['id' => '[0-9]+' , 'count' => '[0-9]+']);

/*
Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function () {
	return view('threads.create');
});

Route::get('/', function(){
	$name = 'audunn';
	return view('./messages/hello' , compact('name'));
});