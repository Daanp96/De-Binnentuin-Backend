<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TafelTimeslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('timeslots')->insert([
        'TimeStart' => new Carbon('11:00'),
        'TimeStop' => new Carbon('12:00'),
      ]);
    }
}
