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
      "tafelnummer" => 1,
      "restaurant_naam" => "binnentuin",
      "maxAantalMensen" => 5,
    ]);

    DB::table("tafel")->insert([
      "tafelnummer" => 2,
      "restaurant_naam" => "binnentuin",
      "maxAantalMensen" => 7,
    ]);

    DB::table("tafel")->insert([
      "tafelnummer" => 3,
      "restaurant_naam" => "binnentuin",
      "maxAantalMensen" => 2,
    ]);

    DB::table("tafel")->insert([
      "tafelnummer" => 4,
      "restaurant_naam" => "binnentuin",
      "maxAantalMensen" => 3,
    ]);



    DB::table("tafel")->insert([
      "tafelnummer" => 1,
      "restaurant_naam" => "dakterras",
      "maxAantalMensen" => 10,
    ]);

    DB::table("tafel")->insert([
      "tafelnummer" => 2,
      "restaurant_naam" => "dakterras",
      "maxAantalMensen" => 2,
    ]);

    DB::table("tafel")->insert([
      "tafelnummer" => 3,
      "restaurant_naam" => "dakterras",
      "maxAantalMensen" => 4,
    ]);

    DB::table("tafel")->insert([
      "tafelnummer" => 4,
      "restaurant_naam" => "dakterras",
      "maxAantalMensen" => 5,
    ]);
    }
}
