<?php namespace Installation;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('groups')->delete();

        \DB::table('groups')->insert(array (
            0 =>
            array (
                'name' => 'Developer',
            ),
            1 =>
            array (
                'name' => 'Administrator',
            ),
        ));


    }
}
