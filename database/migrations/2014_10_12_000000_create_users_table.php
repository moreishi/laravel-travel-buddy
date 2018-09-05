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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex')->default('M');
            $table->integer('age')->nullable();
            $table->string('eyes')->nullable();
            $table->string('hair')->nullable();
            $table->string('bodytype')->nullable();
            $table->integer('nationality')->nullable();
            $table->integer('height')->nullable();  // in centimeter
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('birthdate')->nullable();
            $table->text('about')->nullable();
            $table->enum('notification',['YES','NO'])->default('YES');
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
