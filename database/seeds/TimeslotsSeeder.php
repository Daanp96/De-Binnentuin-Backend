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
      DB::table('timeslots')->insert(array(
        array(
          'id' => '1',
          'TimeStart' => '12:00',
          'TimeStop' => '13:00',
        ),array(
          'id' => '2',
          'TimeStart' => '13:30',
          'TimeStop' => '14:30',
        )
      ));
    }
}
