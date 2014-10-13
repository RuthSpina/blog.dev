<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
    $table->increments('id');
    $table->string('email', 200)->unique();
    $table->string('password', 255);
    $table->rememberToken();
    $table->timestamps();
		});
		Schema::table('posts', function($table)
{
    $table->integer('user_id')->unsigned();
    $table->foreign('user_id')->references('id')->on('users');
});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
	Schema::table('posts', function($table)
{
    $table->dropForeign('posts_user_id_foreign');
    $table->dropColumn('user_id');
});

}
