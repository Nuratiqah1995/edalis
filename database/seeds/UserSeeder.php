<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $data = [
            [
                'email' => 'administrator@unikl.edu.my',
                'password' => bcrypt('123456'),
                'gender' => 'Male',
                'age' => 23,
                'name' => 'Administrator',
                'role' => 1 
            ],
            [
                'email' => 'user@unikl.edu.my',
                'password' => bcrypt('123456'),
                'gender' => 'Male',
                'age' => 23,
                'name' => 'User',
                'role' => 2
            ]
        ];

        foreach($data as $dat){
            User::create($dat);
        }
    }
}
