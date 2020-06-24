<?php

use Illuminate\Database\Seeder;

class MenuitemBestellingenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menuitem_bestellingen')->insert([
        'bestellingen_id' => 1,
        'menuitem_id' => 1,
        'aantal' => 3,
        ]);

        DB::table('menuitem_bestellingen')->insert([
        'bestellingen_id' => 1,
        'menuitem_id' => 2,
        'aantal' => 1,
        ]);

        DB::table('menuitem_bestellingen')->insert([
        'bestellingen_id' => 2,
        'menuitem_id' => 2,
        'aantal' => 3,
        ]);

        DB::table('menuitem_bestellingen')->insert([
        'bestellingen_id' => 3,
        'menuitem_id' => 29,
        'aantal' => 3,
        ]);

        DB::table('menuitem_bestellingen')->insert([
        'bestellingen_id' => 3,
        'menuitem_id' => 21,
        'aantal' => 1,
        ]);


          DB::table('menuitem_bestellingen')->insert([
            'bestellingen_id' => 3,
            'menuitem_id' => 13,
            'aantal' => 3,
            ]);

          DB::table('menuitem_bestellingen')->insert([
            'bestellingen_id' => 3,
            'menuitem_id' => 18,
            'aantal' => 1,
            ]);

            DB::table('menuitem_bestellingen')->insert([
              'bestellingen_id' => 4,
              'menuitem_id' => 32,
              'aantal' => 2,
              ]);

            DB::table('menuitem_bestellingen')->insert([
              'bestellingen_id' => 2,
              'menuitem_id' => 8,
              'aantal' => 4,
              ]);
    }
}
