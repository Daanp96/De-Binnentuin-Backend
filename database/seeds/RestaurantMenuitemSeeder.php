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
            //snacks
            array(
              'id' => '1',
              'restaurant_menunumber' => 1,
              'submenu' => 'Snacks',
              'menuitem_id' => '1',
            ),array(
              'id' => '2',
              'restaurant_menunumber' => 1,
              'submenu' => 'Snacks',
              'menuitem_id' => '2',
            ),array(
              'id' => '3',
              'restaurant_menunumber' => 1,
              'submenu' => 'Snacks',
              'menuitem_id' => '3',
            ),array(
              'id' => '4',
              'restaurant_menunumber' => 1,
              'submenu' => 'Snacks',
              'menuitem_id' => '4',
            ),array(
              'id' => '5',
              'restaurant_menunumber' => 1,
              'submenu' => 'Snacks',
              'menuitem_id' => '5',
            ),array(
              'id' => '6',
              'restaurant_menunumber' => 1,
              'submenu' => 'Snacks',
              'menuitem_id' => '6',
            ) //toasts
            ,array(
              'id' => '7',
              'restaurant_menunumber' => 1,
              'submenu' => 'Toasts',
              'menuitem_id' => '7',
            ),array(
              'id' => '8',
              'restaurant_menunumber' => 1,
              'submenu' => 'Toasts',
              'menuitem_id' => '8',
            ),array(
              'id' => '9',
              'restaurant_menunumber' => 1,
              'submenu' => 'Toasts',
              'menuitem_id' => '9',
            ),array(
              'id' => '10',
              'restaurant_menunumber' => 1,
              'submenu' => 'Toasts',
              'menuitem_id' => '10',
            ),array(
              'id' => '11',
              'restaurant_menunumber' => 1,
              'submenu' => 'Toasts',
              'menuitem_id' => '11',
            ) //Salads
            ,array(
              'id' => '12',
              'restaurant_menunumber' => 1,
              'submenu' => 'Salads',
              'menuitem_id' => '12',
            ),array(
              'id' => '13',
              'restaurant_menunumber' => 1,
              'submenu' => 'Salads',
              'menuitem_id' => '13',
            ),array(
              'id' => '14',
              'restaurant_menunumber' => 1,
              'submenu' => 'Salads',
              'menuitem_id' => '14',
            ) // Sandwiches
            ,array(
              'id' => '15',
              'restaurant_menunumber' => 1,
              'submenu' => 'Sandwiches',
              'menuitem_id' => '15',
            ),array(
              'id' => '16',
              'restaurant_menunumber' => 1,
              'submenu' => 'Sandwiches',
              'menuitem_id' => '16',
            ),array(
              'id' => '17',
              'restaurant_menunumber' => 1,
              'submenu' => 'Sandwiches',
              'menuitem_id' => '17',
            ),array(
              'id' => '18',
              'restaurant_menunumber' => 1,
              'submenu' => 'Sandwiches',
              'menuitem_id' => '18',
            ),array(
              'id' => '19',
              'restaurant_menunumber' => 1,
              'submenu' => 'Sandwiches',
              'menuitem_id' => '19',
            ),array(
              'id' => '20',
              'restaurant_menunumber' => 1,
              'submenu' => 'Sandwiches',
              'menuitem_id' => '20',
            )
          ));
    }
}
