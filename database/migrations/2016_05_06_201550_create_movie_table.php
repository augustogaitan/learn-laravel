<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('movie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cast');
            $table->string('direccion');
            $table->string('duracion');
            $table->timestamps();
            
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('movie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movie');
    }
}
