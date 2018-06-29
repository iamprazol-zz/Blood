<?php

namespace App\Http\Controllers;
use App\Groups;
use App\User;
use Auth;
use App\Camps;
use Image;
use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
		$user = Auth::user();
		if($user->admin) {
			$u = User::all();
			$g = Groups::all();
			return view('admin.index')->with('users' , $u)->with('groups' , $g);
		}
		return response('Unauthorized' , 401);

	}


	public function display(){
    	$camp = Camps::OrderBy('id' , 'asc')->get();
		$user = Auth::user();
		if($user->admin) {
			return view('admin.display')->with('camps', $camp);
		}
	}


	public function edit($id){
    	$user = Auth::user();
		if($user->admin) {
			$camp = Camps::where('id' , $id)->first();
			return view('camps.edit',['id' , $id])->with('camps' , $camp);
		}
		return response('Unauthorized' , 401);

	}

	public function update($id){

		$r = request();
		$this->validate($r , [
			'title' => 'required|max:30',
			'contents' => 'required|string|min:100' ,

		]);

			$camp = Camps::find($id);

			$camp->contents = $r->contents;
			$camp->title = $r->title;
			$camp->camp_date = $r->camp_date;


			$camp->save();


		Session::flash('success', 'Camp updated successfully');

		return redirect()->route('camps.show');

	}

	public function destroy($id)
	{
		$camp = Camps::find($id);

		$camp->delete();

		Session::flash('success', 'Camp Has Been Deleted Successfully');

		return redirect()->route('camps.show');
	}


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



	public function make_admin($id){

		$ad = User::where('id' , $id)->first();

		$ad->admin = 1 ;

		$ad->save();



		Session::flash('success' , 'You are going');

		return redirect()->back();
    }


	public function remove_admin($id){

		$ad = User::where('id' , $id)->first();

		$ad->admin = 0 ;

		$ad->save();



		Session::flash('success' , 'You are going');

		return redirect()->back();
	}


}
