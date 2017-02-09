<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsubjectTable extends Migration
{

    public function up()
    {
        Schema::create('Subsubjects', function (Blueprint $table) {
            $table->integer('pkSubsubjectsID')->primary();
            $table->integer('fkSubjectsID');
            $table->string('subsubjectsName', 50);

            $table->boolean('subsubjectsStatus')->default(0);
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
        Schema::drop('Subsubjects');
    }
}
