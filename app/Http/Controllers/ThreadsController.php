<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index(){
    	$threads = Thread::all();

		return view('threads.index', compact('threads'));

	}

	public function create(){

		return view('threads.create', compact('tasks'));
	}

	public function show($id){

		$thread = Thread::find($id);

		return view('threads.show', compact('thread'));
	}

	public function store(Request $request){
		
		$thread = new Thread;
		$thread->title = $request->title;
		$thread->body = $request->body;
		$thread->user_id = 1;
		$thread->save();

		return redirect('/threads');
	}

}