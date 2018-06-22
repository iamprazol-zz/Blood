<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\User::create([
			'name' => 'admin' ,
			'password' => bcrypt('admin') ,
			'email' => 'admin@blood.com' ,
			'gender' => 'Female',
			'dob' => Carbon::parse('1998-01-01'),
			'admin' => 1 ,
			'avatar' => asset('avatars/avatar.png') ,
			'groups_id' => 6 ,
			'mobile' => 9821256117
		]);



		App\User::create([
			'name' => 'Prajjwal' ,
			'password' => bcrypt('prajjwal') ,
			'email' => 'iamprazol@blood.com' ,
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1997-01-01'),
			'avatar' => asset('avatars/avatar.png') ,
			'groups_id' => 4 ,
			'mobile' => 9845690436
		]);

		App\User::create([
			'name' => 'Anjaan' ,
			'password' => bcrypt('anjaan') ,
			'email' => 'anjaan@blood.com' ,
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1996-01-01'),
			'avatar' => asset('avatars/avatar.png') ,
			'groups_id' => 8 ,
			'mobile' => 9847004480
		]);
    }
}
