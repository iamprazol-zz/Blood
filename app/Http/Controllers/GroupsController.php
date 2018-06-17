<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth;
use Illuminate\Http\Request;
use App\Groups;

use App\User;


class GroupsController extends Controller
{
    public function index(){
    	$groups = Groups::all();
    	$user = User::all();



    	return view('groups.index')->with('groups' , $groups)->with('user' , $user);
	}
}
