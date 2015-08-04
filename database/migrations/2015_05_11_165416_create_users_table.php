<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('identification')->unique();
            $table->string('user_name');
            $table->string('name');
            $table->string('second_name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('mobile_phone');
            $table->integer('phone');
            $table->string('photo');
            $table->string('curso');
            $table->integer('user_id');
            $table->string('role_id');
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
		Schema::drop('users');
	}

}
