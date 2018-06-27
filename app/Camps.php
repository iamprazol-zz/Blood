<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camps extends Model
{
    protected $fillable = ['title' ,'camp_date' , 'contents','camp_pic'];
}
