<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
      //  $this->call(RestaurantSeeder::class);
      //  $this->call(MenuitemSeeder::class);
      //  $this->call(RestaurantMenuitemSeeder::class);
    // $this->call(TafelTimeslotsSeeder::class);
      //$this->call(RoleSeeder::class);
    //  $this->call(UserSeeder::class);
  //  $this->call(TafelSeeder::class);
    //  $this->call(BestellingenSeeder::class);
      $this->call(MenuitemBestellingenSeeder::class);
    }
}
