<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

            'name'=>"JOSE DE ANGELIS",
            'email'=>"diangelisj@outlook.com",
            'password'=>bcrypt('0123465'),
            'escritorio'=>"Home Office"

        ]);
    }
}
