<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
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
                'id_kemungkinan' => '96d67a0f-5fe9-44b0-beed-5ac0808b0892',
                'peringkat' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ]
        ]);
    }
}
