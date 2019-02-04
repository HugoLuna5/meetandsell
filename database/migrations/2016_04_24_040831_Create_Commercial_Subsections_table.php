<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialSubsectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('commercial_subsections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('commercial_subsection');
            $table->integer('commercial_section')->unsigned();
            $table->foreign('commercial_section')
                ->references('id')
                ->on('commercial_sections')
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
		Schema::drop('commercial_subsections');
	}

}
