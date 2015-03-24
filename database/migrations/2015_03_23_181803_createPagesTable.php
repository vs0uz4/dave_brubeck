<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('davbr_pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('section_id');
			$table->string('title', 45);
			$table->longText('content');
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
		Schema::drop('davbr_pages');
	}

}