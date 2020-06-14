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
          'betaald' => false,
          'tafeltimeslots_id' => 1,
          'hoeveelMensen' => 2
        ]);

        DB::table('bestellingen')->insert([
          'user_id' => 1,
          'betaald' => true,
          'tafeltimeslots_id' => 1,
          'hoeveelMensen' => 3
        ]);
    }
}
