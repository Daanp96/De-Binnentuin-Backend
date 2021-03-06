<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuitem', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('beschrijving');
            $table->string('allergenen')->nullable();
            $table->string('categorie')->nullable();
            $table->string('diet')->nullable();
            $table->float('prijs');
            $table->string('fotolocatie')->nullable();
            $table->boolean('chefSpecial');
            $table->integer('aantalVerkocht');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menuitem');
    }
}
