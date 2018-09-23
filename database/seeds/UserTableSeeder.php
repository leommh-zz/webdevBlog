<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Leonardo Morini',
            'email'  =>  'leo.morini.nn@gmail.com',
            'password' => bcrypt('admadm'),
            'biography' => 'Usuário Fulano de Tal',
        ]);
    }
}
