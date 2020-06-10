<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTafelTimeslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tafel_timeslots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tafel_id')->unsigned();
            $table->foreign('tafel_id')->references('id')->on('tafel');
            $table->bigInteger('timeslots_id')->unsigned();
            $table->foreign('timeslots_id')->references('id')->on('timeslots');
            $table->Date('Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tafel_timeslots');
    }
}
