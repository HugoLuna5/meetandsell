<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('rfc');
			$table->string('web_page');
            $table->integer('address')->unsigned();
            $table->foreign('address')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade');
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
		Schema::drop('companies');
	}

}
