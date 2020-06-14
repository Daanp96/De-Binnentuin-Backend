<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TafelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tafel')->insert([
          'tafelnummer' => 10,
          'restaurant_naam' => 'binnentuin',
          'maxAantalMensen' => 4
        ]);
    }
}
