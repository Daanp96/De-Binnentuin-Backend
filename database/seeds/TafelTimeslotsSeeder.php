<?php

use Illuminate\Database\Seeder;

class TafelTimeslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("tafel_timeslots")->insert([
        "id" => 1,
        "tafel_id" => 1,
        "timeslots_id" => 4,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "id" => 2,
        "tafel_id" => 1,
        "timeslots_id" => 5,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "id" => 3,
        "tafel_id" => 1,
        "timeslots_id" => 8,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "id" => 4,
        "tafel_id" => 2,
        "timeslots_id" => 5,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "id" => 5,
        "tafel_id" => 2,
        "timeslots_id" => 7,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "id" => 6,
        "tafel_id" => 2,
        "timeslots_id" => 9,
        "Date" => "2020/01/31",
      ]);
    }
}
