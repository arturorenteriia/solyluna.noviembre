<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextAssitedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_assiteds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('title1');
			$table->longText('text1');
			$table->mediumText('title2');
			$table->longText('text2');
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
		Schema::drop('text_assiteds');
	}

}
