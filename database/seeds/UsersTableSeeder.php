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
                'password' => '$2y$10$IWdvdBHzQeXjvzVksefm..YV1KbfmOU4uaP7/qcu1nl/9/5lEo5Jm', // Password1234 - Reset this with `Hash::make('whateveryournewpasswordis')` in `php artisan tinker`
                'remember_token' => NULL,
                'activated' => 1,
                'activate_code' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
