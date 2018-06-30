<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	$this->call(RequestTableSeeder::class);
		$this->call(GroupsTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(AvailableSeeder::class);
		$this->call(CampsTableSeeder::class);
		$this->call(ContactTableSeeder::class);


	}
}
