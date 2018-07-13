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
			'name' => 'Kabita Parajuli' ,
			'password' => bcrypt('admin') ,
			'email' => 'admin@blood.com' ,
			'username' => 'admin',
			'gender' => 'Female',
			'dob' => Carbon::parse('1998-01-01'),
			'admin' => 1 ,
			'avatar' => 'avatar.png' ,
			'groups_id' => 6 ,
			'mobile' => 9821256117,
			'latitude' => 28.2613485,
			'longitude' => 83.9721112 ,
			'address' => 'lamachaur , pokhara',
			'verify' => 'verified'
		]);



		App\User::create([
			'name' => 'Prajjwal Poudel' ,
			'password' => bcrypt('prajjwal') ,
			'email' => 'iamprazol@blood.com' ,
			'username' => 'iamprazol',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1997-01-01'),
			'avatar' => 'avatar.png',
			'groups_id' => 4 ,
			'mobile' => 9845690436,
			'latitude' => 28.2631308,
			'longitude' => 83.9932144 ,
			'address' => 'batulichaur , pokhara',
			'verify' => 'not verified'

		]);

		App\User::create([
			'name' => 'Anjaan Gaire' ,
			'password' => bcrypt('anjaan') ,
			'email' => 'anjaan@blood.com' ,
			'username' => 'gaire',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1996-01-01'),
			'avatar' => 'avatar.png',
			'groups_id' => 8 ,
			'mobile' => 9847004480,
			'latitude' => 28.2245888,
			'longitude' => 83.9889757  ,
			'address' => 'chipledhunga , pokhara',
			'verify' => 'not verified'
		]);
    }
}
