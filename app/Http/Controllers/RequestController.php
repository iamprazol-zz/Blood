<?php

namespace App\Http\Controllers;


use App\Requests;
use Session;

class RequestController extends Controller
{
    public function show($id) {

    	$req = Requests::where('user_id' , $id)->first();
    	return view('request.show')->with('request' , $req);

    }




}
