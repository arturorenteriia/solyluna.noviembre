<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('title1');
			$table->longText('text1');
			$table->longText('text2');
			$table->longText('text3');
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
		Schema::drop('text_contacts');
	}

}
