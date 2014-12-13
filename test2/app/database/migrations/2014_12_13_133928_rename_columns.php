<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->renameColumn('userid', 'c_name');
		});

		Schema::table('periods', function($table)
		{
		    $table->renameColumn('userid', 'username');
		});

		Schema::table('actions', function($table)
		{
		    $table->renameColumn('userid', 'username');
		});

		Schema::table('places', function($table)
		{
		    $table->renameColumn('userid', 'username');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
		    $table->renameColumn('c_name', 'userid');
		});

		Schema::table('periods', function($table)
		{
		    $table->renameColumn('username', 'userid');
		});

		Schema::table('actions', function($table)
		{
		    $table->renameColumn('username', 'userid');
		});

		Schema::table('places', function($table)
		{
		    $table->renameColumn('username', 'userid');
		});		
	}



}
