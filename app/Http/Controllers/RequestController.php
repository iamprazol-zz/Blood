<?php

namespace App\Http\Controllers;


use App\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;

class RequestController extends Controller
{
    public function show() {

    	$req = Requests::all();

    	return view('request.show')->with('request', $req);

    }



	public function create() {

		return view('request.create');

	}

	public function store(){
    	$r = request();

    	$req = Requests::create([
    		'b_group' => $r->b_group ,
			'contents' => $r->contents ,
			'user_id' => Auth::id() ,
			'required_till' => $r->required_till ,
		]);

    	Session::flash('success' , 'Request posted successfully');

    	return redirect()->route('request.show')->with('request' , $req);
	}


}
