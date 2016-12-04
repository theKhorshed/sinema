<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_show', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hall_id');
            $table->integer('show_id');
            $table->integer('movie_id')->nullable();

            $table->foreign('hall_id')
              ->references('id')->on('halls')
              ->onDelete('cascade');

            $table->foreign('show_id')
              ->references('id')->on('shows')
              ->onDelete('cascade');

            $table->foreign('movie_id')
              ->references('id')->on('movies');

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
        Schema::dropIfExists('hall_show');
    }
}
