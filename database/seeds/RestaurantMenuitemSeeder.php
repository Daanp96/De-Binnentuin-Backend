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
              'submenu' => 'categorie',
              'menuitem_id' => '1',
            ),array(
              'id' => '2',
              'restaurant_menunumber' => 1,
              'submenu' => 'categorie',
              'menuitem_id' => '15',
            ),array(
              'id' => '3',
              'restaurant_menunumber' => 1,
              'submenu' => 'categorie',
              'menuitem_id' => '6',
            ),array(
              'id' => '4',
              'restaurant_menunumber' => 1,
              'submenu' => 'categorie',
              'menuitem_id' => '20',
            )
          ));
    }
}
