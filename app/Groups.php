<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{

	public function user(){
		return $this->hasMany('App\User');
	}

	public  function requests(){
		return $this->hasMany('App\Requests');
	}
}
