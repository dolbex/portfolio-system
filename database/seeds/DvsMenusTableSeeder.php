<?php

use Illuminate\Database\Seeder;

class DvsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dvs_menus')->delete();
        
        \DB::table('dvs_menus')->insert(array (
            0 => 
            array (
                'language_id' => 45,
                'translated_from_menu_id' => 0,
                'name' => 'Admin Menu',
                'links' => NULL,
            ),
        ));
        
        
    }
}