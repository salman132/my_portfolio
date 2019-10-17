<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
           'name'=> 'salman rahman auvi',
           'email'=> 'salman.auvi@gmail.com',
           'is_admin'=> 1,
            'password'=> \Illuminate\Support\Facades\Hash::make('auvi0377'),

        ]);
    }
}
