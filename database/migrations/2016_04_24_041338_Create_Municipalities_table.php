<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('municipalities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('municipality');
            $table->integer('state')->unsigned();
            $table->foreign('state')
                ->references('id')
                ->on('states')
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
		Schema::drop('municipalities');
	}

}
