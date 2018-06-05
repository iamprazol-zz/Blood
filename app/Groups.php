<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{

	public function users(){
		return $this->hasMany('App\Users');
	}

	public  function requests(){
		return $this->hasMany('App\Requests');
	}
}
