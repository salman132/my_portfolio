<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Settings::create([
            'user_id'=>1,
            'logo'=>'uploads/logo/1570960070user.png',
            'phone'=>'01303321178',
            'address'=>'Uttara,Dhaka 1230'
        ]);
    }
}
