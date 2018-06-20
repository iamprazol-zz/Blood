<?php

namespace App\Http\Controllers;


use App\Groups;
use App\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;

class RequestController extends Controller
{
    public function show() {

    	$req = Requests::OrderBy('required_till' , 'asc')->get();
    	$group = Groups::all();

    	return view('request.show')->with('request', $req);

    }



	public function create() {

    	$request = Requests::all();
    	$group = Groups::all();

		return view('request.create')->with('groups' , $group);

	}

	public function store(){
    	$r = request();

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

}
