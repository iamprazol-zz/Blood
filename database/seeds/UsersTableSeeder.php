<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Users::create([
			'name' => 'admin' ,
			'password' => bcrypt('admin') ,
			'email' => 'admin@blood.com' ,
			'admin' => 1 ,
			'avatar' => asset('avatars/avatar.png') ,
			'b_group' => 'A+'
		]);



		App\Users::create([
			'name' => 'Prajjwal' ,
			'password' => bcrypt('prajjwal') ,
			'email' => 'iamprazol@blood.com' ,
			'avatar' => asset('avatars/avatar.png') ,
			'b_group' => 'B+'
		]);

		App\Users::create([
			'name' => 'Anjaan' ,
			'password' => bcrypt('anjaan') ,
			'email' => 'anjaan@blood.com' ,
			'avatar' => asset('avatars/avatar.png') ,
			'b_group' => 'O+'
		]);
    }
}
