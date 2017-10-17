<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
   public function store(Request $request){
	
	dd('comment');	
	
	}
   	/*
		$comment = new Comment;
		$comment->body = $request->body;
		$comment->user_id = Auth::id();
		$comment->save();

		return redirect('/threads/{thread->id}');
	}
	*/
}
