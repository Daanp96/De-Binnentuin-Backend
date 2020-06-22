<?php

use Illuminate\Database\Seeder;

class MenuitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menuitem')->insert(array(
        // Snacks
        array(
          'naam' => 'Organic Yoghurt',
          'beschrijving' => 'With granola & jam',
          'allergenen' => '',
          'categorie' => 'Snacks',
          'diet' => '',
          'prijs' => '4.00',
          'fotolocatie' => '',
          'chefSpecial' => '1',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Daily Two',
          'beschrijving' => 'Pieces of fruit',
          'allergenen' => '',
          'categorie' => 'Snacks',
          'diet' => '',
          'prijs' => '1.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Smoothie',
          'beschrijving' => 'With forest fruits & yoghurt',
          'allergenen' => '',
          'categorie' => 'Snacks',
          'diet' => '',
          'prijs' => '3.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Breakfast Cocktail',
          'beschrijving' => 'with oats, mango & banana',
          'allergenen' => '',
          'categorie' => 'Snacks',
          'diet' => '',
          'prijs' => '3.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Oat Cookie',
          'beschrijving' => 'Homemade',
          'allergenen' => '',
          'categorie' => 'Snacks',
          'diet' => '',
          'prijs' => '1.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Croissant',
          'beschrijving' => 'Freshly baked',
          'allergenen' => '',
          'categorie' => 'Snacks',
          'diet' => '',
          'prijs' => '1.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ),

        // Toasts
        array(
          'naam' => 'Mack & Cheese',
          'beschrijving' => 'Mackerel melt toastie',
          'allergenen' => '',
          'categorie' => 'Toasts',
          'diet' => '',
          'prijs' => '4.25',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Italian',
          'beschrijving' => 'With mozzarella, pesto & tomato',
          'allergenen' => '',
          'categorie' => 'Toasts',
          'diet' => '',
          'prijs' => '4.25',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Classic Cheese',
          'beschrijving' => 'Toasted cheese sandwich',
          'allergenen' => '',
          'categorie' => 'Toasts',
          'diet' => '',
          'prijs' => '3.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Avo on Toast',
          'beschrijving' => 'With tomato, pumpkin seeds & parsely',
          'allergenen' => '',
          'categorie' => 'Toasts',
          'diet' => '',
          'prijs' => '4.75',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Toasted Banana Bread',
          'beschrijving' => 'with yoghurt, walnuts & jam',
          'allergenen' => '',
          'categorie' => 'Toasts',
          'diet' => '',
          'prijs' => '4.75',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ),

        // Salads
        array(
          'naam' => 'The Goat',
          'beschrijving' => 'Grilled goat cheese, walnuts & honey',
          'allergenen' => '',
          'categorie' => 'Salads',
          'diet' => '',
          'prijs' => '6.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'California',
          'beschrijving' => 'Salmon & avocado',
          'allergenen' => '',
          'categorie' => 'Salads',
          'diet' => '',
          'prijs' => '6.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Mista',
          'beschrijving' => 'Mozzarella & balsamic syrup',
          'allergenen' => '',
          'categorie' => 'Salads',
          'diet' => '',
          'prijs' => '5.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ),

        // Sandwiches
        array(
          'naam' => 'Caprese',
          'beschrijving' => 'With pesto, mozzarella, tomato & rocket',
          'allergenen' => '',
          'categorie' => 'Sandwiches',
          'diet' => '',
          'prijs' => '3.75',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Salmon',
          'beschrijving' => 'Smoked ASC salmon with cream cheese',
          'allergenen' => '',
          'categorie' => 'Sandwiches',
          'diet' => '',
          'prijs' => '4.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Mackerel',
          'beschrijving' => 'Homemade mackerel salad',
          'allergenen' => '',
          'categorie' => 'Sandwiches',
          'diet' => '',
          'prijs' => '3.75',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Avo',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'allergenen' => '',
          'categorie' => 'Sandwiches',
          'diet' => '',
          'prijs' => '4.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Hummus',
          'beschrijving' => 'With tomato & lettuce',
          'allergenen' => '',
          'categorie' => 'Sandwiches',
          'diet' => '',
          'prijs' => '3.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        ), array(
          'naam' => 'Gezond',
          'beschrijving' => 'Cheese & greens',
          'allergenen' => '',
          'categorie' => 'Sandwiches',
          'diet' => '',
          'prijs' => '3.50',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        )
      ));
    }
}
