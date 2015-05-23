<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill_product',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('value_product');
            $table->text('comment');
            $table->enum('score',['excelente','bueno','regular','malo','pesimo']);
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('bill_id')->unsigned();
            $table->foreign('bill_id')->references('id')->on('bills');
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
	    Schema::drop('bill_product');
	}

}
