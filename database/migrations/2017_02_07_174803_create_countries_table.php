<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Countries', function (Blueprint $table) {
            $table->integer('pkCountriesID')->primary();

            $table->string('countriesNameEN', 100);
            $table->string('countriesNameKH', 100);

            $table->smallInteger('countriesStatus');
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
        Schema::drop('Countries');
    }
}
