<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;


class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'username',
		'password',
		'dob',
		'gender',
		'mobile',
		'groups_id', 'latitude' , 'longitude' , 'address' , 'verify' , 'citizenship'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	protected $dates = ['dob'];

	public function getAge()
	{
		return $this->dob->diffInYears(Carbon::now());
	}

	public function getdob()
	{
		return $this->dob->toDateString();
	}


	public function requests()
	{
		return $this->hasMany('App\Requests');
	}

	public function groups()
	{
		return $this->belongsTo('App\Groups');
	}

	public function available(){
		return $this->hasMany('App\Available');
	}


	public function is_admin($id){
		$user = User::where('id' , $id)->first();

		if($user->admin == 1){
			return true;
		} else {
			return false;
		}
	}

	public function is_verified($id){
		$user = User::where('id' , $id)->first();

		if($user->verify == 'verified'){
			return true;
		} else {
			return false;
		}
	}

}
