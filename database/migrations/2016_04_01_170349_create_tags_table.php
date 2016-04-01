<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('article_tag', function(Blueprint $table)
		{
			$table->unsignedInteger('article_id')->index();
			$table->foreign('article_id')
				->references('id')
				->on('article')
				->onDelete('cascade');
			$table->unsignedInteger('tag_id')->index();
			$table->foreign('tag_id')
				->references('id')
				->on('tag')
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
		Schema::drop('tags');
		Schema::drop('article_tag');
	}

}
