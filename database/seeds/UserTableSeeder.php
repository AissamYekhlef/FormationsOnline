<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',//password
                'remember_token' => null,
                'created_at' => now(),          
            ],
            [
                'id'             => 2,
                'name'           => 'Guest',
                'email'          => 'guest@guest.com',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',//password
                'remember_token' => null,
                'created_at' => now(),   
            ],
        ];

        User::insert($users);

        factory(User::class, 5)->create();
    }
}
