<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'i_d' => 2,
        'naam' => '1',
        'email' => 'ma',
        'password' => 'asd',
        'rekeningNummer' => '4.5',
        'isMember' => true,
        'adres' => 'a',
        'roles_id' => 1,
      ]);

      DB::table('users')->insert([
        'i_d' => 3,
        'naam' => '2',
        'email' => 'true',
        'password' => 'asd',
        'rekeningNummer' => '4.5',
        'isMember' => false,
        'adres' => 'a',
        'roles_id' => 2,
      ]);
    }
}
