<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;
use Session;
use Image;



class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index' );
    }



    public function editProfile()
    {
    	$user = User::where('id' , Auth::id())->first();
        return view('profile.editProfile')->with('u' , $user);
    }



    public function pic()
    {
		$user = User::where('id' , Auth::id())->first();
		return view('profile.pic')->with('u' , $user);
    }



    public function upload(Request $request)
	{
		$file = $request->file('pic');
		$filename = time() . '.' . $file->getClientOriginalExtension();
		Image::make($file)->resize(300, 300)->save(public_path('avatars/' . $filename));
		$user = Auth::user();
		$user->avatar = $filename;
		$user->save();

		return view('profile.index', array('user' => Auth::user()) );


	}


    public function update(Request $request) {

    	$this->validate($request,[
			'email' => 'required|string|email|max:255',
			'user_name' => 'required|string',
			'mobile' => 'required|numeric',
			'dob' => 'required|date|before: 18 years'
		]);

		$maps_url = 'https://' . 'maps.googleapis.com/' . 'maps/api/geocode/json' . '?address=' . urlencode($request->address);
		$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($request->address) . '&sensor=false');
		$geo = json_decode($geo, true); // Convert the JSON to an array

		if (isset($geo['status']) && ($geo['status'] == 'OK')) {
			$latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
			$longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude

			$id = Auth::id();
			$user = User::find($id);

			$user->email = $request->email;
			$user->username = $request->user_name;
			$user->mobile = $request->mobile;
			$user->dob = Carbon::parse(request()->dob);
			$user->address = $request->address;
			$user->latitude = $latitude;
			$user->longitude = $longitude;


			$user->save();
		}

		Session::flash('success' , 'Request updated successfully');

		return redirect()->route('profile.index');
    }




}
