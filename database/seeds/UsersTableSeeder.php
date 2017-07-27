<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => NULL,
                'email' => 'no-reply@devisephp.com',
                'username' => 'devise',
                'password' => '$2y$10$OkkiQBq2zyhdgf8JFlA9teZyPxVqf.IXdgT9waKCjjh.6kwfScbgm',
                'remember_token' => NULL,
                'activated' => 1,
                'activate_code' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}