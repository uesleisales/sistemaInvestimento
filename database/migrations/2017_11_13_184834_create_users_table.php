<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

            //people data
            $table->string('cpf', 11)->unique()->nullalbe(); //nullalber significa que pode ser nulo ou não
            $table->string('name',50);
            $table->char('phone',11);
            $table->date('birth')->nullalbe();
            $table->char('gender', 1)->nullalbe();
            $table->text('notes')->nullalbe();

            //auth data
            $table->string('email', 80)->unique();
            $table->string('password', 254)->nullable();

            //permission
            $table->string('status')->default('active');
            $table->string('permission')->default('app.user');

            $table->rememberToken();
            $table->timestamps(); //Cria 2 campos na table: created_at e updated_at
            $table->softDeletes(); //cria o campo deleted_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{	
		Schema::table('users', function(Blueprint $table) {

		});
		
		Schema::drop('users');
	}

}
