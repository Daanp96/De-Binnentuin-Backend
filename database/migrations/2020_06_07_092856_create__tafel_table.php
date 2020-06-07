<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTafelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tafel', function (Blueprint $table) {
            $table->id();
            $table->integer('tafelnummer');
            $table->string('restaurant_naam');
            $table->foreign('restaurant_naam')->references('name')->on('restaurant');
            $table->integer('maxAantalMensen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tafel');
    }
}
