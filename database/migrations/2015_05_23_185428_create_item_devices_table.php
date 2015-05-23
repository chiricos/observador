<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_devices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('device_id')->unsigned();
            $table->foreign('device_id')->references('id')->on('devices');
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
		Schema::drop('item_devices');
	}

}
