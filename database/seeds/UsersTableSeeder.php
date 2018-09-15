<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fui Tapeado -_0_-
        // User::created([
        //     'name' => 'João da Silva',
        //     'email' => 'joaodasilva@email.com',
        //     'password' => bcrypt('secret'),
        //     'biography' => 'Usuário Fulano de Tal'
        // ]);

        DB::table('users')->insert([
            'name' => 'João da Silva',
            'email' => 'joaodasilva@email.com',
            'password' => bcrypt('secret'),
            'biography' => 'Usuário Fulano de Tal'
        ]);

    }
}
