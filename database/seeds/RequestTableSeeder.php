<?php

use Illuminate\Database\Seeder;
use App\Requests;

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
        	'donor_id' => 3 ,
			'blood_id' => 2 ,
			'contents' => 'Need for B+ve blood . There is need of 4 pint B +ve blood for a delivery case .The condition of the mother is getting worst due to the continuous loss of blood.'
		];

        $r2 = [
        	'donor_id' => 2 ,
			'blood_id' => 4 ,
			'contents' => 'Need for o+ve blood for a bike accident victim. The condition of victim is Serious and there is immediate need of blood to stat the operation.'
		];

		$r3 = [
			'donor_id' => 2 ,
			'blood_id' => 2 ,
			'contents' => 'Need for o+ve blood for a bike accident victim. The condition of victim is Serious and there is immediate need of blood to stat the operation.'
		];


        Requests::create($r1);
        Requests::create($r2);
        Requests::create($r3);


    }
}
