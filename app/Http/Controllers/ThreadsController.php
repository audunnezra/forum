<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index(){
		$message = "This is the Threads index view.";
		return $message;
	}

	public function create(){
		$message = "This is the Threads create view.";
		return $message;
	}

	public function show($id){
		$message = "This is the thread with id " . $id;
		return $message;
	}

}
