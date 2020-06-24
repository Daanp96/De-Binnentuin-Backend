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
          //Snacks
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
          ),
          // Hot Drinks
          array(
            'id' => '21',
            'restaurant_menunumber' => 1,
            'submenu' => 'Hot Drinks',
            'menuitem_id' => '21',
          ), array(
            'id' => '22',
            'restaurant_menunumber' => 1,
            'submenu' => 'Hot Drinks',
            'menuitem_id' => '22',
          ), array(
            'id' => '23',
            'restaurant_menunumber' => 1,
            'submenu' => 'Hot Drinks',
            'menuitem_id' => '23',
          ), array(
            'id' => '24',
            'restaurant_menunumber' => 1,
            'submenu' => 'Hot Drinks',
            'menuitem_id' => '24',
          ), array(
            'id' => '25',
            'restaurant_menunumber' => 1,
            'submenu' => 'Hot Drinks',
            'menuitem_id' => '25',
          ),
          // Coffee
          array(
            'id' => '26',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '26',
          ), array(
            'id' => '27',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '27',
          ), array(
            'id' => '28',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '28',
          ), array(
            'id' => '29',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '29',
          ), array(
            'id' => '30',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '30',
          ), array(
            'id' => '31',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '31',
          ), array(
            'id' => '32',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '32',
          ), array(
            'id' => '33',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '33',
          ), array(
            'id' => '34',
            'restaurant_menunumber' => 1,
            'submenu' => 'Coffee',
            'menuitem_id' => '34',
          ),
          // Cold Drinks
          array(
            'id' => '35',
            'restaurant_menunumber' => 1,
            'submenu' => 'Cold Drinks',
            'menuitem_id' => '35',
          ), array(
            'id' => '36',
            'restaurant_menunumber' => 1,
            'submenu' => 'Cold Drinks',
            'menuitem_id' => '36',
          ), array(
            'id' => '37',
            'restaurant_menunumber' => 1,
            'submenu' => 'Cold Drinks',
            'menuitem_id' => '37',
          ), array(
            'id' => '38',
            'restaurant_menunumber' => 1,
            'submenu' => 'Cold Drinks',
            'menuitem_id' => '38',
          ), array(
            'id' => '39',
            'restaurant_menunumber' => 1,
            'submenu' => 'Cold Drinks',
            'menuitem_id' => '39',
          ), array(
            'id' => '40',
            'restaurant_menunumber' => 1,
            'submenu' => 'Cold Drinks',
            'menuitem_id' => '40',
          )
        ));
    }
}
