<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Session;

class ContactController extends Controller
{

	public function contact(){

		$contact = contact::OrderBy('id' , 'asc')->get();

		return view('admin.displaycontact')->with('contacts' , $contact);

	}


	public function store(){

		$r = request();

		$this->validate($r , [
			'email' => 'required|string|email|max:255',
			'subject' => 'required|string|min:80',
		]);

		contact::create([
			'name' => $r->name ,
			'email' => $r->email ,
			'subject' => $r->subject
		]);

		Session::flash('success', 'Feedback posted successfully');

		return redirect()->route('forum.index');

	}

}
