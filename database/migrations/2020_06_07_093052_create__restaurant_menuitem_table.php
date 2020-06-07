<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMenuitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_menuitem', function (Blueprint $table) {
            $table->id();
            $table->integer('restaurant_menunumber');
            $table->foreign('restaurant_menunumber')->references('menunumber')->on('restaurant');
            $table->string('submenu');
            $table->unsignedBigInteger('menuitem_id');
            $table->foreign('menuitem_id')->references('id')->on('menuitem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_restaurant_menuitem');
    }
}
