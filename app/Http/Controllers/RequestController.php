<?php

namespace App\Http\Controllers;


use App\Requests;
use Session;
use App\Users;

class RequestController extends Controller
{
    public function show() {

    	$req = Requests::all('user_id' )->first();

    	return view('request.create')->with('request', $req);

    }




}
