<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('goup_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('password', 255);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}