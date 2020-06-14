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
      DB::table("restaurant")->insert([
        "name" => "Binnentuin",
        "menunumber" => 1,
        "isOpen" => true,
      ]);

      DB::table("restaurant")->insert([
        "name" => "Dakterras",
        "menunumber" => 2,
        "isOpen" => false,
      ]);
    }
}
