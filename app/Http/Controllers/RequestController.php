<?php

namespace App\Http\Controllers;


use App\Groups;
use App\Requests;
use App\Available;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class RequestController extends Controller
{
    public function show($id) {

		$request = Requests::where('id' , $id)->get();
		$group = Groups::all();
		$user = User::all();
		$available = Available::all();





		return view('request.show')->with('requests' , $request)
										 ->with('groups' , $group)
										 ->with('users' , $user)
										 ->with('availables' , $available);
    }



	public function create() {

    	$group = Groups::all();

		return view('request.create')->with('groups' , $group);

	}

	public function store(){
    	$r = request();
		$this->validate($r ,[
			'contents' => 'required|string|min:100' ,
			'required_till' => 'required|date|after:yesterday'
		]);

    	$req = Requests::create([
			'contents' => $r->contents ,
			'user_id' => Auth::id() ,
			'groups_id' => $r->groups_id ,
			'required_till' => $r->required_till ,
		]);

    	Session::flash('success' , 'Request posted successfully');

    	return redirect()->route('forum.show' , ['id' => $req->groups_id]);
	}



	public function  edit($id){

    	$request = Requests::where('id' , $id)->first();

    	return view('request.edit')->with('requests' , $request);
	}


	public function update($id){

    	$this->validate(request() , [
    		'contents' => 'required'
		]);

    	$request = Requests::find($id);

    	$request->contents = request()->contents;
    	$request->required_till = request()->required_till;

    	$request->save();

    	Session::flash('success' , 'Request updated successfully');

    	return redirect()->route('forum.show' , ['id' => $request->groups_id]);

	}



	public function available($id){


    	Available::create([
    	'requests_id' => $id ,
		'user_id' => Auth::id()
		]);


		Session::flash('success' , 'You are going');

		return redirect()->back();
	}


	public  function unavailable($id){

    	$go = Available::where('requests_id' , $id)->where('user_id' , Auth::id())->first();

    	$go->delete();

		Session::flash('success' , 'You are not going');

		return redirect()->back();


	}

}
