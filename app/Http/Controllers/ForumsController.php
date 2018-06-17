<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Requests;
use App\User;

class ForumsController extends Controller
{
    public function index(){
    	$request = Requests::OrderBy('required_till' , 'asc')->get();
		$user = User::all();
    	$group = Groups::all();

    	return view('forum.forum')->with('requests' , $request)
								  ->with('groups' , $group)
								  ->with('users' , $user);
	}


	public function who(){
    	return view('forum.who');
	}


	public function show($id){
		$requests = Requests::where('b_id' , $id)->OrderBy('required_till' , 'asc')->get();
		$users = User::all();
		$groups = Groups::all();

		return view('forum.show')->with('requests' , $requests)
			->with('groups' , $groups)
			->with('users' , $users);
	}

}
