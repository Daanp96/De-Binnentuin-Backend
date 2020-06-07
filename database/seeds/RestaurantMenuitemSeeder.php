<?php

use Illuminate\Database\Seeder;

class RestaurantMenuitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('restaurant_menuitem')->insert(array(
            array(
              'id' => '1',
              'restaurant_menunumber' => 1,
              'submenu' => 'drinken',
              'menuitem_id' => '1',
            ),array(
              'id' => '2',
              'restaurant_menunumber' => 1,
              'submenu' => 'fanta',
              'menuitem_id' => '1',
            ),array(
              'id' => '3',
              'restaurant_menunumber' => 1,
              'submenu' => 'drinken',
              'menuitem_id' => '2',
            )
          ));
    }
}
