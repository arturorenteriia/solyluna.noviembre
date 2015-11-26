<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('full_name');
			$table->string('telephone');
			$table->string('email');
			$table->string('country');
			$table->string('state');
			$table->string('city');
			$table->string('zip_code');
			$table->longText('body');
			$table->softDeletes();
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
		Schema::drop('contacts');
	}

}
