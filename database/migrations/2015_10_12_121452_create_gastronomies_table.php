<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastronomiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gastronomies', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellidos');
			$table->string('image');
			$table->string('acerca');
			$table->string('docencia');
			$table->integer('property_id')->unsigned();
			$table->foreign('property_id')
				->references('id')
				->on('properties')
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
		Schema::drop('gastronomies');
	}

}
