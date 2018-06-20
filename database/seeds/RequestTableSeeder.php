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
			'required_till' => Carbon::parse('2018-01-01'),
			'contents' => 'Need for AB+ve blood . There is need of 4 pint AB +ve blood for a delivery case .The condition of the mother is getting worst due to the continuous loss of blood.'
		];

        $r2 = [
        	'user_id' => 2 ,
			'groups_id' => 4,
			'required_till' => Carbon::parse('2018-10-13'),
			'contents' => 'Need for B+ve blood . There is need of 4 pint B +ve blood for a delivery case .The condition of the mother is getting worst due to the continuous loss of blood.'

		];

		$r3 = [
			'user_id' => 2 ,
			'groups_id' => 8 ,
			'required_till' => Carbon::parse('2018-11-22'),
			'contents' => 'Need for o+ve blood for a bike accident victim. The condition of victim is Serious and there is immediate need of blood to stat the operation.'
		];


        Requests::create($r1);
        Requests::create($r2);
        Requests::create($r3);


    }
}
