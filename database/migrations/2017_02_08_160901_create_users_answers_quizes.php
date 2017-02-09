<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAnswersQuizes extends Migration
{

    public function up()
    {
        Schema::create('UserAnswerQuestion', function (Blueprint $table) {
            $table->integer('pkUserAnswerQuestionID')->primary();
            $table->integer('fkQuizsID');
            $table->integer('fkUsersID');

            $table->dateTime('UserAnswerQuestionAnswerDate');
            $table->float('UserAnswerQuestionScore');  //5

            $table->boolean('UserAnswerQuestionStatus')->default(0);
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
        Schema::drop('UserAnswerQuestion');
    }
}
