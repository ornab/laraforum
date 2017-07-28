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
        User::create([

        		'name'=> 'admin',
        		'avatar'=>asset('avatars/avatar.png'),
        		'password'=>bcrypt('admin'),
        		'email'=>'admin@laraforum.dev',
        		'admin'=> 1

        	]);
    }
}
