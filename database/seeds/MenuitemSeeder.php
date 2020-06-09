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
        DB::table('menuitem')->insert([
            'naam' => 'Ananas',
            'beschrijving' => 'Een lekkere ananas, heel lekker op een pizza',
            'categorie' => 'Fruit',
            'prijs' => 4.20,
            'chefSpecial' => True,
            'aantalVerkocht' => 0
        ]);
    }
}
