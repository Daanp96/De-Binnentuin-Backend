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
        array(
          'id' => '1',
          'naam' => 'fanta',
          'beschrijving' => 'drinken',
          'allergenen' => '',
          'categorie' => 'drinken',
          'diet' => '',
          'prijs' => '5.00',
          'fotolocatie' => '',
          'chefSpecial' => '1',
          'aantalVerkocht' => '0',
        ), array(
          'id' => '2',
          'naam' => 'tosti',
          'beschrijving' => 'tosti met kaas',
          'allergenen' => '',
          'categorie' => 'brood',
          'diet' => '',
          'prijs' => '4.00',
          'fotolocatie' => '',
          'chefSpecial' => '0',
          'aantalVerkocht' => '0',
        )  
      ));
    }
}
