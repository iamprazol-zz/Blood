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
        'name', 'email', 'username' , 'password', 'dob' ,'gender' ,'mobile' ,'groups_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	protected $dates = ['dob'];

	public function getAge()
	{
		return $this->dob->diffInYears(Carbon::now());
	}


	public function requests(){
    	return $this->hasMany('App\Requests');
	}

	public function groups(){
    	return $this->belongsTo('App\Groups');
	}

	public function available(){
		return $this->hasMany('App\Available');
	}

	public function profile(){
		return $this->hasMany('App\profile');
	}
}
