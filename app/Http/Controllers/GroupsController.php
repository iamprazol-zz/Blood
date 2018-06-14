<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Groups;


class GroupsController extends Controller
{
    public function index(){
    	return view('groups.index')->with('groups' , Groups::all());
	}
}
