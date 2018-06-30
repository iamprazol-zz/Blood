<?php

use Illuminate\Database\Seeder;
use App\contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$c1 = [
    		'name' => 'Keshav Ghimire' ,
			'email' => 'keshav@gmail.com' ,
			'subject' => 'Best site ever made for the blood donation case. It has every thing that is needed and also has the notification system that notifies user instantly when a blood need is requested'
		];


		$c2 = [
			'name' => 'Rudra prasad wagle' ,
			'email' => 'rudra@gmail.com' ,
			'subject' => 'Email notification system is good but it will be better to have mobile sms notification system because not all users will regularly check their email.'
    	];

		contact::create($c1);
		contact::create($c2);

    }
}
