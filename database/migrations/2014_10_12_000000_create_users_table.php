<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('groups_id')->unsigned();
            $table->string('name');
			$table->string('email')->unique();
			$table->string('username')->unique();
			$table->string('avatar')->default('avatar.png');
            $table->string('gender');
            $table->date('dob');
            $table->boolean('admin')->default(0);
            $table->string('password');
            $table->bigInteger('mobile');
			$table->double('latitude');
			$table->double('longitude');
			$table->string('address');
			$table->string('verify')->default('not verified');
			$table->string('citizenship');



			$table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
