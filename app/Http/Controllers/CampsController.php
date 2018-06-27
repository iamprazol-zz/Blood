<?php

namespace App\Http\Controllers;

use App\Camps;
use Illuminate\Http\Request;
use Image;
use Session;
use Illuminate\Pagination\Paginator;


class CampsController extends Controller
{
    public function show(){
    	$camp = Camps::OrderBy('id' ,'asc')->paginate(3);


    	return view('camps.show')->with('camps' , $camp);
    }


    public function create(){
    	return view('camps.create');
	}


	public function store(){
    	$req = request();

    	$this->validate($req, [
    		'title' => 'required|max:30',
			'contents' => 'required|string|min:100' ,
		]);

		$file = $req->file('pic');
		$filename = time() . '.' . $file->getClientOriginalExtension();
		Image::make($file)->resize(300, 850)->save(public_path('images/' . $filename));

    	$camp = Camps::create([
    		'title' => $req->title,
			'contents' => $req->contents ,
			'camp_date' => $req->camp_date ,
			'camp_pic' => $filename
		]);

		Session::flash('success' , 'Camp posted successfully');

		return redirect()->route('camps.show')->with('camps' , $camp);
    }
}
