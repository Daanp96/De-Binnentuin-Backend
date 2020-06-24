<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
   'rolename' => 'admin'
 ]); 

      DB::table('roles')->insert([
   'rolename' => 'gebruiker'
      ]);

      DB::table('roles')->insert([
   'rolename' => 'plnt'
      ]);
    }
}
