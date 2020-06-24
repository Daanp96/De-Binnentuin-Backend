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
        "tafel_id" => 1,
        "timeslots_id" => 1,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "tafel_id" => 1,
        "timeslots_id" => 3,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "tafel_id" => 1,
        "timeslots_id" => 1,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "tafel_id" => 2,
        "timeslots_id" => 2,
        "Date" => "2020/01/31",
      ]);

      DB::table("tafel_timeslots")->insert([
        "tafel_id" => 2,
        "timeslots_id" => 3,
        "Date" => "2020/01/31",
      ]);
    }
}
