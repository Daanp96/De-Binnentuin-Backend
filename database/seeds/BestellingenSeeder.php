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
          'user_id' => 2,
          'betaald' => true,
          'tafeltimeslots_id' => 1,
          'opmerking' => '',
          'prijsVoledigeBestelling' => 4.5,
          'hoeveelMensen' => 3,
        ]);
    }
}
