<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('Schools', function (Blueprint $table) {
            $table->integer('pkSchoolsID')->primary();

            $table->string('schoolsName', 50);
            $table->string('schoolsFirstName', 50);
            $table->string('schoolsLastName', 50);
            $table->string('schoolsTitle', 50);
            $table->string('schoolsPhone', 50);
            $table->string('schoolsWebsite', 50);
            $table->string('schoolsFax', 50);
            $table->string('schoolsAddress', 100);  //9

            $table->boolean('schoolsStatus')->default(0);
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
        Schema::drop('Schools');
    }
}

