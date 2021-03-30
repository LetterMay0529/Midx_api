<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('viewer_id')->unsigned();
            $table->bigInteger('movie_id')->unsigned();
            $table->date('screening_date');
            $table->time('screening_time');
            $table->timestamps();

            $table->foreign('viewer_id')->references('id')->on('viewers')->onDelete("CASCADE");
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
