<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class available extends Model
{
    protected $fillable = ['requests_id' , 'user_id'];

	public function user(){
		return $this->belongsTo('App\User');
	}


	public function requests(){
		$this->belongsTo('App\Requests');
	}
}
