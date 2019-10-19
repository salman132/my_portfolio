<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\About::create([
            'user_id'=>1,
            'profession'=> 'Web Developer',
            'about_me'=> 'Iam PHP Developer who love to works with Laravel,PHP OOP etc',
            'profile'=>'uploads/profile/1571156552circled-user-male-skin-type-1-2.png',
            'experience'=>3
        ]);
    }
}
