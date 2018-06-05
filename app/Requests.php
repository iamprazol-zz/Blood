<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
	protected $fillable = ['donor_id' , 'blood_id' , 'contents'];

	public function users(){
		return $this->belongsTo('App\Users');
	}

	public function groups(){
		return $this->belongsTo('App/Requests');
	}
}
