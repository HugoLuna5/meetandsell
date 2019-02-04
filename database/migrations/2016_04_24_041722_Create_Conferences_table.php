<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('conferences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('conference');
            $table->integer('round')->unsigned();
            $table->foreign('round')
                ->references('id')
                ->on('rounds')
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
		Schema::drop('conferences');
	}

}
