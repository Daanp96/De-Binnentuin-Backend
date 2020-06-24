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
    }
}
