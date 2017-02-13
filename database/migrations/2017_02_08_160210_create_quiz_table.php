<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    public function up()
    {
        Schema::create('Quizs', function (Blueprint $table) {
            $table->integer('pkQuizsID')->primary();
            $table->integer('fkSchoolsID');
            $table->integer('fkSubjectsID');

            $table->string('quizsName', 100);
            $table->string('quizsDescription', 100);
            $table->integer('quizsTotalScore');
            $table->tinyInteger('quizsHour');
            $table->tinyInteger('quizsMinute');

            $table->integer('quizsYear');  //8

            $table->boolean('quizsStatus')->default(0);
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
        Schema::drop('Quizs');
    }
}
