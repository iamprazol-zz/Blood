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
            $table->string('avatar')->default('avatars/avatar.png');
            $table->string('gender');
            $table->date('dob');
            $table->boolean('admin')->default(0);
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('mobile');


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
