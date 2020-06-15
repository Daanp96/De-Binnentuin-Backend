<?php

use Illuminate\Database\Seeder;

class TimeslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("timeslots")->insert([
        "id" => 1,
        "TimeStart" => "10:00",
        "TimeStop" => "11:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 2,
        "TimeStart" => "11:00",
        "TimeStop" => "12:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 3,
        "TimeStart" => "12:00",
        "TimeStop" => "13:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 4,
        "TimeStart" => "13:00",
        "TimeStop" => "14:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 5,
        "TimeStart" => "14:00",
        "TimeStop" => "15:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 6,
        "TimeStart" => "15:00",
        "TimeStop" => "16:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 7,
        "TimeStart" => "16:00",
        "TimeStop" => "17:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 8,
        "TimeStart" => "17:00",
        "TimeStop" => "18:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 9,
        "TimeStart" => "18:00",
        "TimeStop" => "19:00",
      ]);

      DB::table("timeslots")->insert([
        "id" => 10,
        "TimeStart" => "19:00",
        "TimeStop" => "20:00",
      ]);
    }
}
