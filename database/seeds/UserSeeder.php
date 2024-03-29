<?php

use Illuminate\Database\Seeder;
use App\User;
use Hash as Bcrypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'User Bagas',
        	'email' => 'user@gmail.com',
        	'password' => Bcrypt::make('123456'),
        ]);
    }
}
