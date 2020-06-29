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
    /*    DB::table('Users')->insert([
     'naam' => 'rick',
     'email' => 'rob@hotmail.com',
     'password' => "AAA",
     'rekeningNummer' => 'k',
     'isMember' => false,
     'adres' => 'nee',
     'roles_id' => 2,
   ]); */

   DB::table('users')->insert([
     'naam' => 'Link',
     'email' => 'Zelda@hotmail.com',
     'password' => "kip",
     'rekeningNummer' => 'k',
     'adres' => 'Leiden straat 34',
     'roles_id' => 3,
     ]);

     DB::table('users')->insert([
       'naam' => 'Pikano',
       'email' => 'pokemon@hotmail.com',
       'password' => "testtest",
       'rekeningNummer' => 'l',
       'adres' => 'Haarlem 2',
       'roles_id' => 2,
       ]);

       DB::table('users')->insert([
         'naam' => 'Jerry',
         'email' => 'plnt@hotmail.com',
         'password' => "plntplnt",
         'rekeningNummer' => '2',
         'adres' => 'Westlaan 21',
         'roles_id' => 1,
         ]);
    }
}
