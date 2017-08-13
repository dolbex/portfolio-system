<?php namespace Installation;

use Illuminate\Database\Seeder;

class Main extends Seeder
{
    /**
     * Run the database seeds.
     * These Seeds generated with iSeed for the most part. The command used to
     * generate those is:
     * ```php artisan iseed dvs_languages,dvs_menu_items,dvs_menus,dvs_page_versions,dvs_pages,dvs_seeds,dvs_test_models,group_user,groups,users --exclude=id,created_at,updated_at```
     *
     * To override one if the values change is:
     * ```php artisan iseed dvs_menu_items --force --exclude=id,created_at,updated_at```
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dvs_pages')->delete();
        \DB::table('dvs_page_versions')->delete();

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
        $this->call(PortfolioCategoryNewPagesSeeder::class);
        $this->call(PortfolioItemNewPagesSeeder::class);
    }
}
