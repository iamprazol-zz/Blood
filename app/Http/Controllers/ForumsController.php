<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Requests;
use App\User;

class ForumsController extends Controller
{
    public function index(){
    	$requests = Requests::OrderBy('created_at' , 'desc')->first();
		$users = User::all();
    	$groups = Groups::all();

    	return view('forum')->with('requests' , $requests)
								  ->with('groups' , $groups)
								  ->with('users' , $users);
	}
}
