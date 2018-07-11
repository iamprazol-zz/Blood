<?php

namespace App\Http\Controllers;


use App\Groups;
use App\Requests;
use App\Available;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Notification;

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

		$maps_url = 'https://' . 'maps.googleapis.com/' . 'maps/api/geocode/json' . '?address=' . urlencode($r->address);
		$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($r->address) . '&sensor=false');
		$geo = json_decode($geo, true); // Convert the JSON to an array

		if (isset($geo['status']) && ($geo['status'] == 'OK')) {
			$latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
			$longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude

			$req = Requests::create([
				'contents' => $r->contents,
				'user_id' => Auth::id(),
				'groups_id' => $r->groups_id,
				'required_till' => $r->required_till,
				'address' => $r->address,
				'latitude' => $latitude,
				'longitude' => $longitude,
			]);
				$donors = self::closest($latitude, $longitude, 5)->where('groups_id' , $r->groups_id)->where('id' , '!=' ,Auth::id())->all();
				Notification::send($donors , new \App\Notifications\NewRequestAdded($req));



		}

    	Session::flash('success' , 'Request posted successfully');

    	return redirect()->route('forum.show' , ['id' => $r->groups_id]);
	}



	public function  edit($id){

    	$request = Requests::where('id' , $id)->first();

    	return view('request.edit')->with('requests' , $request);
	}


	public function update($id){

    	$r = request();
    	$this->validate($r , [
    		'contents' => 'required|string|min:100',
			'required_till' => 'required|date|after:yesterday'

		]);

		$maps_url = 'https://' . 'maps.googleapis.com/' . 'maps/api/geocode/json' . '?address=' . urlencode($r->address);
		$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($r->address) . '&sensor=false');
		$geo = json_decode($geo, true); // Convert the JSON to an array

		if (isset($geo['status']) && ($geo['status'] == 'OK')) {
			$latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
			$longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude

			$req = Requests::find($id);

			$req->contents = $r->contents;
			$req->required_till = $r->required_till;
			$req->address = $r->address;
			$req->latitude = $latitude;
			$req->longitude = $longitude;


			$req->save();

			$donors = self::closest($latitude, $longitude, 5)->all();
			Notification::send($donors , new \App\Notifications\NewRequestAdded($req));
		}

			Session::flash('success', 'Request updated successfully');

			return redirect()->route('forum.show', ['id' => $req->groups_id]);

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

		Session::flash('cancel' , 'You are not going');

		return redirect()->back();


	}




	public static function closest($lat, $lng, $max_distance = 50, $max_locations = 10, $units = 'miles')
	{
		/*
		 *  Allow for changing of units of measurement
		 */
		switch ( $units ) {
			default:
			case 'miles':
				$gr_circle_radius = 3959;
				break;
			case 'kilometers':
				$gr_circle_radius = 6371;
				break;
		}
		$distance_select = sprintf(
			"*, ( %d * acos( cos( radians(%s) ) " .
			" * cos( radians( latitude ) ) " .
			" * cos( radians( longitude ) - radians(%s) ) " .
			" + sin( radians(%s) ) * sin( radians( latitude ) ) " .
			") " .
			") " .
			"AS distance",
			$gr_circle_radius,
			$lat,
			$lng,
			$lat
		);
		return  User::selectraw($distance_select)
			->having( 'distance', '<', $max_distance )
			->take( $max_locations )
			->orderBy( 'distance', 'ASC' )
			->get();
	}

}
