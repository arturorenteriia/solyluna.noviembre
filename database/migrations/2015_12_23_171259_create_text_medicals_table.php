<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextMedicalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_medicals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('title');
			$table->longText('text1');
			$table->longText('text2');
			$table->longText('text3');
			$table->longText('text4');
			$table->longText('text5');
			$table->longText('text6');
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
		Schema::drop('text_medicals');
	}

}
