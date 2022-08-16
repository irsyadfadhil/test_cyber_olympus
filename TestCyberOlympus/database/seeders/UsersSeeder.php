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
                'name' => 'ichad',
                'email' => 'admin@cyberolympus.com ',
                'password' => bcrypt('cyberadmin'),
            ]
        ]);
    }
}
