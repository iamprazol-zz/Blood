<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth;
use Illuminate\Http\Request;
use App\Groups;

use App\User;
use App\Requests;


class GroupsController extends Controller
{
    public function index(){
    	$group = Groups::all();
    	$user = User::all();
    	$request = Requests::all();

    	dd($group);

    	return view('groups.index')->with('groups' , $group)
										 ->with('users' , $user)
    									 ->with('requests' , $request);
	}
}
