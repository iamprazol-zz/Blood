<?php

use Illuminate\Database\Seeder;
use App\Available;

class AvailableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$l1 = [
			'requests_id' => 2 ,
			'user_id' => 2 ,
		];

		$l2 = [
			'requests_id' => 2 ,
			'user_id' => 1 ,
		];

		Available::create($l1);
		Available::create($l2);

	}
}
