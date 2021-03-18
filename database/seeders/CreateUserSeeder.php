<?php

namespace Database\Seeders;
use App/Models/User;

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run()
    {
        $user = [
        	[
        		'name' => 'isUser',
        		'username' => 'isUser',
        		'email' => 'user@mail.com',
        		'password' => bcrypt('12345'),
        		'photo' => 'user.jpg',
        		'roles_id' => 2
        	],
        	[
        		'name' => 'isUser',
        		'username' => 'isUser',
        		'email' => 'user@mail.com',
        		'password' => bcrypt('12345'),
        		'photo' => 'user.jpg',
        		'roles_id' => 1
        	]
        ];

        foreach ($user as $key => $value) {
        	User::create($value);
        }
    }
}
