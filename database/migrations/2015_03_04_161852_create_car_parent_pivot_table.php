<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarParentPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_parent', function(Blueprint $table)
		{
			$table->integer('car_id')->unsigned()->index();
			$table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
			$table->integer('parent_id')->unsigned()->index();
			$table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('car_parent');
	}

}
