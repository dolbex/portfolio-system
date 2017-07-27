<?php

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
                'position' => 100,
                'permission' => NULL,
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
                'position' => 101,
                'permission' => NULL,
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
                'position' => 102,
                'permission' => NULL,
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
                'position' => 103,
                'permission' => NULL,
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
                'position' => 104,
                'permission' => NULL,
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
                'position' => 105,
                'permission' => NULL,
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
                'position' => 106,
                'permission' => NULL,
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
                'position' => 200,
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
                'position' => 201,
                'permission' => NULL,
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
                'position' => 202,
                'permission' => NULL,
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
                'position' => 203,
                'permission' => NULL,
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
                'position' => 204,
                'permission' => NULL,
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
                'position' => 205,
                'permission' => NULL,
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
                'position' => 206,
                'permission' => NULL,
            ),
        ));
        
        
    }
}