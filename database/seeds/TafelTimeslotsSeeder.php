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
      DB::table('tafel_timeslots')->insert([
        'tafel_id' => 1,
        'timeslots_id' => 1,
        'Date' => new Carbon('2016-01-23'),
      ]);
    }
}
