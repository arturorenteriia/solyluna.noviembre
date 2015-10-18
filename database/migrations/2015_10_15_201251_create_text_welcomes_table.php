<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextWelcomesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_welcomes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('title');
			$table->longText('firstText');
			$table->longText('secondText');
			$table->mediumText('phrase');
			$table->mediumText('description');
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
		Schema::drop('text_welcomes');
	}

}
