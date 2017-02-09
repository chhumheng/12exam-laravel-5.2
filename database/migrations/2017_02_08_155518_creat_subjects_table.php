<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('Subjects', function (Blueprint $table) {
            $table->integer('pkSubjectsID')->primary();
            $table->string('subjectsName', 50);

            $table->boolean('subjectsStatus')->default(0);
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
        Schema::drop('Subjects');
    }
}
