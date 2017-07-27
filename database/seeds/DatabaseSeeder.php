<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DvsLanguagesTableSeeder::class);
        $this->call(DvsMenuItemsTableSeeder::class);
        $this->call(DvsMenusTableSeeder::class);
        $this->call(DvsPageVersionsTableSeeder::class);
        $this->call(DvsPagesTableSeeder::class);
        $this->call(DvsSeedsTableSeeder::class);
        $this->call(DvsTestModelsTableSeeder::class);
        $this->call(GroupUserTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BlogNewPagesSeeder::class);
    }
}
