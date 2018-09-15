<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::created([
            'name'      => 'Seu Nome',
            'email'     =>  'seu-email@email.com',
            'password'  => bcrypt('secret'),
            'biography' => 'Usuário Fulano de Tal',
        ]);

    }
}
