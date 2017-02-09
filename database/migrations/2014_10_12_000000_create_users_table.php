<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('gender', 7);
            $table->string('phone', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            //add column more
            $table->string('address');
            //$table->string('role');
            $table->boolean('role')->default(0);
            $table->boolean('status')->default(0);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
