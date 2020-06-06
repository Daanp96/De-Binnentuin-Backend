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
          'MenuItem_id' => 'Hambuger',
          'Aantal' => 1,
        ]);
    }
}
