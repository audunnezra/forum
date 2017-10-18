<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
   public function store(Request $request, $thread_id){
	
	$this->validate($request, [
        	'body' => 'required'
    	]);

	Comment::create([
		 	'body' => $request->body,
		 	'thread_id' => $thread_id,
		 	'user_id' => auth()->id()
		 ]);

		return back();

	}
}
