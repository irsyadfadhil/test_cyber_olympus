<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'first_name' => 'ichad',
                'last_name' => 'Fadil',
                'email' => 'admin@cyberolympus.com ',
                'password' => bcrypt('cyberadmin'),
                'account_type' => '0',
            ]
        ]);
    }
}
