<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
	protected $fillable = ['user_id' , 'b_id' , 'contents' , 'b_group' , 'required_till'];

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function groups(){
		return $this->belongsTo('App\Requests');
	}
}
