<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public $timestamps = false;

    public function up()
    {

      /* Hieronder staat de migration voor de users tabel in de database */

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rekeningNummer');
            $table->boolean('isMember')->default(false);
            $table->string('adres');
            $table->bigInteger('roles_id')->unsigned();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
