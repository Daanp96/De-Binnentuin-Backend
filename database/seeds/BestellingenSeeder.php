<?php

use Illuminate\Database\Seeder;

class BestellingenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bestellingen')->insert([
          'user_id' => 1,
          'betaald' => true,
          'tafeltimeslots_id' => 2,
          'opmerking' => '',
          'prijsVoledigeBestelling' => 24.5,
          'hoeveelMensen' => 2,
        ]);

        DB::table('bestellingen')->insert([
          'user_id' => 2,
          'betaald' => true,
          'tafeltimeslots_id' => 1,
          'opmerking' => '',
          'prijsVoledigeBestelling' => 13,
          'hoeveelMensen' => 3,
        ]);

        DB::table('bestellingen')->insert([
          'user_id' => 3,
          'betaald' => true,
          'tafeltimeslots_id' => 1,
          'opmerking' => '',
          'prijsVoledigeBestelling' => 4.5,
          'hoeveelMensen' => 1,
        ]);

        DB::table('bestellingen')->insert([
          'user_id' => 3,
          'betaald' => false,
          'tafeltimeslots_id' => 5,
          'opmerking' => '',
          'prijsVoledigeBestelling' => 7.5,
          'hoeveelMensen' => 6,
        ]);
    }
}
