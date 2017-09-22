<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($user_id){
    	$threads = DB::select('select * from threads where user_id=?', [$user_id]);
		
		return view('profile', compact('threads'));
    }
}
