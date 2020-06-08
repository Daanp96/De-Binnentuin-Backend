<?php

use Illuminate\Database\Seeder;

class RestaurantSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('restaurant')->insert([
        'name' => 'Binnentuin',
        'menu_number' => 1,
        'isOpen' => true,
      ]);

      DB::table('restaurant')->insert([
        'name' => 'Roof',
        'menu_number' => 2,
        'isOpen' => true,
      ]);
    }
}
