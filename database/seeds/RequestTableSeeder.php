<?php

use Illuminate\Database\Seeder;
use App\Requests;
use Carbon\Carbon;

class RequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
        	'user_id' => 3 ,
			'groups_id' => 2 ,
			'required_till' => Carbon::parse('2018-07-16'),
			'contents' => 'Need for AB+ve blood . There is need of 4 pint AB +ve blood for a delivery case .The condition of the mother is getting worst due to the continuous loss of blood.',
			'latitude' => 28.2631308,
			'longitude' => 83.9932144 ,
			'address' => 'batulichaur , pokhara'
		];

        $r2 = [
        	'user_id' => 2 ,
			'groups_id' => 4,
			'required_till' => Carbon::parse('2018-10-13'),
			'contents' => 'Need for B+ve blood . There is need of 4 pint B +ve blood for a delivery case .The condition of the mother is getting worst due to the continuous loss of blood.',
			'latitude' => 28.2245888,
			'longitude' => 83.9889757  ,
			'address' => 'chipledhunga , pokhara'
			
		];

		$r3 = [
			'user_id' => 2 ,
			'groups_id' => 8 ,
			'required_till' => Carbon::parse('2018-11-22'),
			'contents' => 'Need for o+ve blood for a bike accident victim. The condition of victim is Serious and there is immediate need of blood to stat the operation.',
			'latitude' => 28.2613485,
			'longitude' => 83.9721112 ,
			'address' => 'lamachaur , pokhara'
		];


		$r4 = [
			'user_id' => 3 ,
			'groups_id' => 1 ,
			'required_till' => Carbon::parse('2018-07-22'),
			'contents' => 'Need for AB -ve blood for a tripper accident victim. The condition of victim is Serious and there is immediate need of blood to stat the operation.',
			'latitude' => 28.212865,
			'longitude' => 83.975439,
			'address' => 'zero , pokhara'
		];

		$r5 = [
			'user_id' => 1 ,
			'groups_id' => 5 ,
			'required_till' => Carbon::parse('2018-11-22'),
			'contents' => 'Need for A -ve  blood for a delivery case .The condition of the mother is getting worst due to the continuous loss of blood.',
			'latitude' => 28.278990,
			'longitude' => 83.934728 ,
			'address' => 'hemja , pokhara'
		];


        Requests::create($r1);
        Requests::create($r2);
        Requests::create($r3);
		Requests::create($r4);
		Requests::create($r5);



	}
}
