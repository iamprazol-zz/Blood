<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Requests;
use App\User;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;

class ForumsController extends Controller
{
    public function index(){

    	$today = Carbon::now()->toDateString();

    	$request = Requests::OrderBy('required_till' , 'asc')->where('required_till' , '>=' , $today)->paginate(3);
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

		$today = Carbon::now()->toDateString();


		$request = Requests::where('groups_id' , $id)->OrderBy('required_till' , 'asc')->where('required_till' , '>=' , $today)->paginate(3);
		$user = User::all();
		$group = Groups::all();

		return view('forum.show')->with('requests' , $request)
			->with('groups' , $group)
			->with('users' , $user);
	}



	public function contact(){
    	return view('forum.contact');
	}



	public function myrequest($id){

		$today = Carbon::now()->toDateString();


		$request = Requests::where('user_id' , $id)->OrderBy('required_till' , 'asc')->where('required_till' , '>=' , $today)->paginate(3);
		$user = User::all();
		$group = Groups::all();

		return view('forum.myrequest')->with('requests' , $request)
			->with('groups' , $group)
			->with('users' , $user);
	}
}
