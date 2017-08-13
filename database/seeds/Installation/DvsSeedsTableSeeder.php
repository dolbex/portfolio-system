<?php namespace Installation;

use Illuminate\Database\Seeder;

class DvsSeedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('dvs_seeds')->delete();

        \DB::table('dvs_seeds')->insert(array (
            0 =>
            array (
                'name' => 'DeviseLanguagesSeeder',
            ),
            1 =>
            array (
                'name' => 'DeviseGroupsSeeder',
            ),
        ));


    }
}
