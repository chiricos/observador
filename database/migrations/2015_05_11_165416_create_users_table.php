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
		Schema::create('users',function($table)
        {
            $table->increments('id');
            $table->integer('identification');
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->string('email');
            $table->integer('mobile_phone');
            $table->integer('phone');
            $table->string('photo');
            $table->integer('role_id');
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onDelete('cascade');
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
