<?php

use Illuminate\Database\Seeder;

class GroupUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('group_user')->delete();
        
        \DB::table('group_user')->insert(array (
            0 => 
            array (
                'group_id' => 1,
                'user_id' => 1,
            ),
        ));
        
        
    }
}