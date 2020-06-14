<?php

use Illuminate\Database\Seeder;

class TafelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("tafel")->insert([
        "id" => 1,
        "tafelnummer" => 1,
        "restaurant_naam" => "Binnentuin",
        "maxAantalMensen" => 5,
      ]);

      DB::table("tafel")->insert([
        "id" => 2,
        "tafelnummer" => 2,
        "restaurant_naam" => "Binnentuin",
        "maxAantalMensen" => 7,
      ]);

      DB::table("tafel")->insert([
        "id" => 3,
        "tafelnummer" => 3,
        "restaurant_naam" => "Binnentuin",
        "maxAantalMensen" => 2,
      ]);

      DB::table("tafel")->insert([
        "id" => 4,
        "tafelnummer" => 4,
        "restaurant_naam" => "Binnentuin",
        "maxAantalMensen" => 3,
      ]);



      DB::table("tafel")->insert([
        "id" => 5,
        "tafelnummer" => 1,
        "restaurant_naam" => "Dakterras",
        "maxAantalMensen" => 10,
      ]);

      DB::table("tafel")->insert([
        "id" => 6,
        "tafelnummer" => 2,
        "restaurant_naam" => "Dakterras",
        "maxAantalMensen" => 2,
      ]);

      DB::table("tafel")->insert([
        "id" => 7,
        "tafelnummer" => 3,
        "restaurant_naam" => "Dakterras",
        "maxAantalMensen" => 4,
      ]);

      DB::table("tafel")->insert([
        "id" => 8,
        "tafelnummer" => 4,
        "restaurant_naam" => "Dakterras",
        "maxAantalMensen" => 5,
      ]);
    }
}
