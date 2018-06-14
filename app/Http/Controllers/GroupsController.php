<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Groups;
<<<<<<< HEAD

=======
use App\Users;
>>>>>>> send

class GroupsController extends Controller
{
    public function index(){
    	return view('groups.index')->with('groups' , Groups::all());
	}
}
