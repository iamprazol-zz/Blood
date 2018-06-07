<?php

namespace App\Http\Controllers;


use App\Requests;

class RequestController extends Controller
{
    public function show($id) {

    	$req = Requests::where('donor_id' , $id)->first();
    	return view('request.show')->with('request' , $req);

    }



}
