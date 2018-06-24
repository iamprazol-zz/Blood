<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Requests extends Model
{

	protected $fillable = ['user_id' , 'groups_id' , 'contents' , 'required_till' , 'latitude' , 'longitude' , 'address'];

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function groups(){
		return $this->belongsTo('App\Groups');
	}

	public function available(){
		return $this->hasMany('App\Available');
	}







	public  function is_user_available(){
		$id = Auth::id();

		$goers = array();

		foreach ($this->available as $go):
			array_push($goers , $go->user_id);
		endforeach;

		if(in_array($id , $goers)){
			return true;
		} else {
			return false;
		}
	}
}
