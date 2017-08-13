<?php namespace Installation;

use Illuminate\Database\Seeder;

class DvsMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('dvs_menu_items')->delete();

        \DB::table('dvs_menu_items')->insert(array (
            0 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => NULL,
                'name' => 'Management',
                'url' => '#',
                'image' => NULL,
                'description' => NULL,
                'position' => 0,
                'permission' => '',
            ),
            1 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Dashboard',
                'url' => '/admin',
                'image' => NULL,
                'description' => NULL,
                'position' => 1,
                'permission' => '',
            ),
            2 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Menus',
                'url' => '/admin/menus',
                'image' => NULL,
                'description' => NULL,
                'position' => 5,
                'permission' => '',
            ),
            3 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Pages',
                'url' => '/admin/pages',
                'image' => NULL,
                'description' => NULL,
                'position' => 6,
                'permission' => '',
            ),
            4 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Languages',
                'url' => '/admin/languages',
                'image' => NULL,
                'description' => NULL,
                'position' => 7,
                'permission' => '',
            ),
            5 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Users',
                'url' => '/admin/users',
                'image' => NULL,
                'description' => NULL,
                'position' => 8,
                'permission' => '',
            ),
            6 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Logout',
                'url' => '/admin/logout',
                'image' => NULL,
                'description' => NULL,
                'position' => 9,
                'permission' => '',
            ),
            7 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => NULL,
                'name' => 'Development',
                'url' => '#',
                'image' => NULL,
                'description' => NULL,
                'position' => 10,
                'permission' => 'isDeveloper',
            ),
            8 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 8,
                'name' => 'API',
                'url' => '/admin/api',
                'image' => NULL,
                'description' => NULL,
                'position' => 11,
                'permission' => '',
            ),
            9 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 8,
                'name' => 'Groups',
                'url' => '/admin/groups',
                'image' => NULL,
                'description' => NULL,
                'position' => 12,
                'permission' => '',
            ),
            10 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 8,
                'name' => 'Permissions',
                'url' => '/admin/permissions',
                'image' => NULL,
                'description' => NULL,
                'position' => 13,
                'permission' => '',
            ),
            11 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 8,
                'name' => 'Templates',
                'url' => '/admin/templates',
                'image' => NULL,
                'description' => NULL,
                'position' => 14,
                'permission' => '',
            ),
            12 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 8,
                'name' => 'Create Models',
                'url' => '/admin/models/create',
                'image' => NULL,
                'description' => NULL,
                'position' => 15,
                'permission' => '',
            ),
            13 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 8,
                'name' => 'Settings',
                'url' => '/admin/settings',
                'image' => NULL,
                'description' => NULL,
                'position' => 16,
                'permission' => '',
            ),
            14 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Blog Posts',
                'url' => '/admin/blogs',
                'image' => NULL,
                'description' => NULL,
                'position' => 2,
                'permission' => '',
            ),
            15 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Portfolio Items',
                'url' => '/admin/portfolio-items',
                'image' => NULL,
                'description' => NULL,
                'position' => 3,
                'permission' => '',
            ),
            16 =>
            array (
                'menu_id' => 1,
                'page_id' => NULL,
                'parent_item_id' => 1,
                'name' => 'Portfolio Categories',
                'url' => '/admin/portfolio-categories',
                'image' => NULL,
                'description' => NULL,
                'position' => 4,
                'permission' => '',
            ),
        ));


    }
}
