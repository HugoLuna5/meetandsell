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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password', 60);
			$table->string('gender');
            $table->integer('company')->unsigned();
            $table->foreign('company')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
            $table->integer('address')->unsigned();
            $table->foreign('address')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade'); 
            $table->rememberToken();
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
