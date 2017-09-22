<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index(){
    	$threads = DB::select('select * from threads');

		return view('threads.index', compact('threads'));

	}

	public function create(){
		$tasks = [
			['title' => "vakna", 'complete' => true, 'anchor' => 'https://www.rumfatalagerinn.is/'],
			['title' => "borda", 'complete' => true, 'anchor' => 'https://www.dominos.is/'],
			['title' => "versla", 'complete' => false, 'anchor' => 'https://www.bonus.is'],
			['title' => "heimavinna", 'complete' => false, 'anchor' => ' k.fss.is'],
			['title' => "sofa", 'complete' => false, 'anchor' => 'https://www.byko.is']
		];

		return view('threads.create', compact('tasks'));
	}

	public function show($id){

		$thread = DB::select('select * from threads where id=?', [$id]);

		return view('threads.show', compact('thread'));
	}

}