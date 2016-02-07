<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abouts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title1');
			$table->string('title2');
			$table->string('title3');
			$table->string('title4');
			$table->string('title5');
			$table->string('title6');
			$table->string('title7');
			$table->string('title8');
			$table->string('title9');
			$table->string('title10');
			$table->longText('text1');
			$table->longText('text2');
			$table->longText('text3');
			$table->longText('text4');
			$table->longText('text5');
			$table->longText('text6');
			$table->longText('text7');
			$table->longText('text8');
			$table->longText('text9');
			$table->longText('text10');
			$table->longText('text11');
			$table->longText('text12');
			$table->longText('text13');
			$table->longText('text14');
			$table->longText('text15');
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
		Schema::drop('abouts');
	}

}
