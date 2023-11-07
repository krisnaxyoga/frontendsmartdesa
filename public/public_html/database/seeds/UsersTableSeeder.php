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
                'id' => 1,
                'desa_id' => 1,
                'name' => 'Admin Simak Desa',
                'username' => 'admin',
                'password' => '$2y$12$LQxpSSGdEuhFYmjxtC3n/u907FZa3vFoS99fgGqKI.Uq51MPB8vTe',
                'remember_token' => 'O3qLNmXeKxmAvppfhV5FmVjRWqjWywXE8L6TmoIwAvvajKQlMyfcOCFgRjBL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'desa_id' => 2,
                'name' => 'Admin Desa Blahkiuh',
                'username' => 'adminblahkiuh',
                'password' => '$2y$12$LQxpSSGdEuhFYmjxtC3n/u907FZa3vFoS99fgGqKI.Uq51MPB8vTe',
                'remember_token' => 'O3qLNmXeKxmAvppfhV5FmVjRWqjWywXE8L6TmoIwAvvajKQlMyfcOCFgRjBL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
