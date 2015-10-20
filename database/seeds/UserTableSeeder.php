<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'Xavier',
        	'email'=>'user@user.com',
        	'password' => bcrypt('password'),
        	]);
        User::create([
        	'name'=>'Zanetti',
        	'email'=>'zanetti@user.com',
        	'password' => bcrypt('password'),
        	]);
    }
}
