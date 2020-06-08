<?php

use Illuminate\Database\Seeder;

class MenuItemBestelling extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_menu_item')->insert([
          'Bestelling_id' => 1,
          'MenuItem_id' => 'Hamburger',
          'Aantal' => 1,
        ]);

        DB::table('_menu_item')->insert([
          'Bestelling_id' => 2,
          'MenuItem_id' => 'Koffie',
          'Aantal' => 3,
        ]);
    }
}
