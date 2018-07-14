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
			'email' => 'admin@gmail.com' ,
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
			'verify' => 'verified' ,
			'citizenship' => 'citizen2.jpg'

		]);



		App\User::create([
			'name' => 'Prajjwal Poudel' ,
			'password' => bcrypt('prajjwal') ,
			'email' => 'iamprazol@gmail.com' ,
			'username' => 'iamprazol',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1997-01-01'),
			'avatar' => 'avatar.png',
			'groups_id' => 4 ,
			'mobile' => 9845690436,
			'latitude' => 28.2631308,
			'longitude' => 83.9932144 ,
			'address' => 'batulichaur , pokhara',
			'verify' => 'not verified' ,
			'citizenship' => 'citizen1.jpg'
		]);

		App\User::create([
			'name' => 'Anjaan Gaire' ,
			'password' => bcrypt('anjaan') ,
			'email' => 'anjaan@gmail.com' ,
			'username' => 'gaire',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1996-01-01'),
			'avatar' => 'avatar.png',
			'groups_id' => 8 ,
			'mobile' => 9847004480,
			'latitude' => 28.2245888,
			'longitude' => 83.9889757  ,
			'address' => 'chipledhunga , pokhara',
			'verify' => 'not verified' ,
			'citizenship' => 'citizen3.jpg'

		]);

		App\User::create([
			'name' => 'Kushal Poudel' ,
			'password' => bcrypt('kushal') ,
			'email' => 'kushal@gmail.com' ,
			'username' => 'iamkushak',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1994-05-10'),
			'avatar' => 'avatar.png',
			'groups_id' => 4 ,
			'mobile' => 9845163257,
			'latitude' => 28.2613485,
			'longitude' => 83.9721112 ,
			'address' => 'lamachaur , pokhara',
			'verify' => 'not verified' ,
			'citizenship' => 'citizen1.jpg'
		]);


		App\User::create([
			'name' => 'Rashilla Lamichhane' ,
			'password' => bcrypt('racella') ,
			'email' => 'lcrasu127@gmail.com' ,
			'username' => 'Racella',
			'gender' => 'Female' ,
			'dob' => Carbon::parse('1998-10-10'),
			'avatar' => 'avatar.png',
			'groups_id' => 4 ,
			'mobile' => 9821256118,
			'latitude' => 28.240552,
			'longitude' => 83.987653 ,
			'address' => 'bagar , pokhara',
			'verify' => 'not verified' ,
			'citizenship' => 'citizen2.jpg'
		]);


		App\User::create([
			'name' => 'Uddhav Dhakal' ,
			'password' => bcrypt('uddhav') ,
			'email' => 'uddhav@gmail.com' ,
			'username' => 'uddhav',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1996-09-21'),
			'avatar' => 'avatar.png',
			'groups_id' => 7 ,
			'mobile' => 9845458129,
			'latitude' => 28.240552 ,
			'longitude' => 83.987653  ,
			'address' => 'bagar , pokhara',
			'verify' => 'not verified' ,
			'citizenship' => 'citizen3.jpg'

		]);

		App\User::create([
			'name' => 'Suyesh Pant' ,
			'password' => bcrypt('suyesh') ,
			'email' => 'suyesh@gmail.com' ,
			'username' => 'suyesh',
			'gender' => 'Male' ,
			'dob' => Carbon::parse('1998-11-21'),
			'avatar' => 'avatar.png',
			'groups_id' => 3 ,
			'mobile' => 9847004390,
			'latitude' => 28.233036 ,
			'longitude' => 83.990629  ,
			'address' => 'nadipur , pokhara',
			'verify' => 'not verified' ,
			'citizenship' => 'citizen2.jpg'

		]);
	}

    }

