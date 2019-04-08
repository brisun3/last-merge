<?php

use Illuminate\Support\Facades\Schema;
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
<<<<<<< HEAD
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
=======
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('ucountry');
            $table->string('utype');
            $table->string('email')->unique();
            $table->string('username')->unique();
=======
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
>>>>>>> 0e984abf5beb29d03b5b5167e7cf4e37c0f627f9
>>>>>>> 60a2a5eb58611068f4fae03b4582bb0b291f8d79
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
