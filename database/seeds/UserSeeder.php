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
        DB::table('Users')->insert([
          'naam' => 'rick',
          'email' => 'rob@hotmail.com',
          'password' => "AAA",
          'rekeningNummer' => 'k',
          'isMember' => false,
          'adres' => 'nee',
          'roles_id' => 1,


        ]);
    }
}
