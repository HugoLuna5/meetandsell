<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
		Schema::create('invitations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->tinyInteger('acepted_1');
			$table->tinyInteger('acepted_2');
			$table->integer('user_1')->unsigned();
            $table->foreign('user_1')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('user_2')->unsigned();
            $table->foreign('user_2')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('conference')->unsigned();
            $table->foreign('conference')
                ->references('id')
                ->on('conferences')
                ->onDelete('cascade');
            $table->text('message');
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
		Schema::drop('invitations');
	}

}
