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
        $user = \App\User::create([
            'name' => 'Ayush Likhar',
            'email' => 'alikhar@laxyo.in',
            'password' => bcrypt('123456')
        ]);

        $user->restaurants()->create([
            'name' => 'Highway Star',
            'location' => 'Bhuvandas Road, NH14 Dadar, Mumbai',
        ]);

        $user->restaurants()->create([
            'name' => 'Mainland China',
            'location' => 'Platinum Tech Park Vashi, Navi Mumbai',
        ]);

        $user->restaurants()->create([
            'name' => 'Mukesh Lunch Home',
            'location' => 'Sai Balaji Tower, Airoli Navi Mumbai',
        ]);
    }
}
