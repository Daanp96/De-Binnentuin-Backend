<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('timeslots')->insert([
        'TimeStart' => new Carbon('13:00'),
        'TimeStop' => new Carbon('14:00'),
      ]);
    }
}
