<?php

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('restaurant')->insert([
      'name' => 'binnentuin',
      'menunumber' => '1',
      'isOpen' => '1',
    ],
    [
      'name' => 'dakterras',
      'menunumber' => '2',
      'isOpen' => '0',
    ]);

    }
}
