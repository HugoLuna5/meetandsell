<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('preferences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user')->unsigned();
            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('commercial_subsection')->unsigned();
            $table->foreign('commercial_subsection')
                ->references('id')
                ->on('commercial_subsections')
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
		Schema::drop('preferences');
	}

}
