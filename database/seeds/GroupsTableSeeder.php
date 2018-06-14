<?php

use Illuminate\Database\Seeder;
use App\Groups;
use Carbon\Carbon;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g1 = ['b_group' => 'AB-' , 'slug' => str_slug('AB negative')];
		$g2 = ['b_group' => 'AB+' , 'slug' => str_slug('AB positive')];
		$g3 = ['b_group' => 'B-' , 'slug' => str_slug('B negative')];
		$g4 = ['b_group' => 'B+' , 'slug' => str_slug('B positive')];
		$g5 = ['b_group' => 'A-' , 'slug' => str_slug('A negative')];
		$g6 = ['b_group' => 'A+' , 'slug' => str_slug('A positive')];
		$g7 = ['b_group' => 'O-' , 'slug' => str_slug('O negative')];
		$g8 = ['b_group' => 'O+' , 'slug' => str_slug('O positive')];


		Groups::create($g1);
		Groups::create($g2);
		Groups::create($g3);
		Groups::create($g4);
		Groups::create($g5);
		Groups::create($g6);
		Groups::create($g7);
		Groups::create($g8);



	}
}
