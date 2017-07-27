<?php

use Illuminate\Database\Seeder;

class DvsTestModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dvs_test_models')->delete();
        
        \DB::table('dvs_test_models')->insert(array (
            0 => 
            array (
                'page_version_id' => 1,
                'name' => 'Some name here',
            ),
        ));
        
        
    }
}