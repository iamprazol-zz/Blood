<?php

use Illuminate\Database\Seeder;
use App\Groups;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g1 = ['b_group' => 'AB-' , 'slug' => str_slug('AB-')];
		$g2 = ['b_group' => 'AB+' , 'slug' => str_slug('AB+')];
		$g3 = ['b_group' => 'B-' , 'slug' => str_slug('B-')];
		$g4 = ['b_group' => 'B+' , 'slug' => str_slug('A+')];
		$g5 = ['b_group' => 'A-' , 'slug' => str_slug('A-')];
		$g6 = ['b_group' => 'A+' , 'slug' => str_slug('A+')];
		$g7 = ['b_group' => 'O-' , 'slug' => str_slug('O-')];
		$g8 = ['b_group' => 'O+' , 'slug' => str_slug('O+')];


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
