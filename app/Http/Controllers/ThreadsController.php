<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index(){

		return view('threads.index');

	}

	public function create(){
		$countries = ['Island','Island','Irland','Island','Irland'];

		return view('threads.create', compact('countries'));
	}

	public function show($id){

		

		return view('threads.show');
	}

}
