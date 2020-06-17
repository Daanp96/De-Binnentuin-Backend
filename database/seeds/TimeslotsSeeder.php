<?php

use Illuminate\Database\Seeder;
use CARBON\carbon;

class TimeslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('timeslots')->insert([
        'TimeStart' => new Carbon('14:00'),
        'TimeStop' => new Carbon('15:00'),
      ]);
    }
}
