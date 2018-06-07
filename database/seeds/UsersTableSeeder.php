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
			'gender' => 'Female',
			'age' => 45 ,
			'admin' => 1 ,
			'avatar' => asset('avatars/avatar.png') ,
			'b_group' => 'A+',
			'mobile' => 9821256117
		]);



		App\Users::create([
			'name' => 'Prajjwal' ,
			'password' => bcrypt('prajjwal') ,
			'email' => 'iamprazol@blood.com' ,
			'gender' => 'Male' ,
			'age' => 22,
			'avatar' => asset('avatars/avatar.png') ,
			'b_group' => 'B+',
			'mobile' => 9845690436
		]);

		App\Users::create([
			'name' => 'Anjaan' ,
			'password' => bcrypt('anjaan') ,
			'email' => 'anjaan@blood.com' ,
			'gender' => 'Male' ,
			'age' => 22,
			'avatar' => asset('avatars/avatar.png') ,
			'b_group' => 'O+',
			'mobile' => 9847004480
		]);
    }
}
