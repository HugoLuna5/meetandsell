<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('street');
			$table->string('outdoor_number');
			$table->string('indoor_number');
			$table->integer('post_code');
            $table->integer('municipality')->unsigned();
            $table->foreign('municipality')
                ->references('id')
                ->on('municipalities')
                ->onDelete('cascade');
            $table->string('colony');
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
		Schema::drop('addresses');
	}

}
