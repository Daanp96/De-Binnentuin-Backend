<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestellingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestellingen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('i_d')->on('users');
            $table->boolean('betaald');
            $table->bigInteger('tafeltimeslots_id')->unsigned();
            //$table->foreign('tafeltimeslots_id')->references('id')->on('tafel_timeslots');
            $table->string('opmerking')->nullable();
            $table->float('prijsVoledigeBestelling');
            $table->integer("hoeveelMensen");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bestellingen');
    }
}
