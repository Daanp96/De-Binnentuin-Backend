<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuitemBestellingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuitem_bestellingen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bestellingen_id');
            $table->foreign('bestellingen_id')->references('id')->on('bestellingen');
            $table->unsignedBigInteger('menuitem_id');
            $table->foreign('menuitem_id')->references('id')->on('menuitem');
            $table->integer('aantal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_menuitem_bestellingen');
    }
}
