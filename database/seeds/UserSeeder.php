<?php

use App\User;
use Illuminate\Database\Seeder;

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
                'email'    => 'administrator@unikl.edu.my',
                'password' => bcrypt('123456'),
                'gender'   => 'Male',
                'age'      => 23,
                'name'     => 'Administrator',
                'role'     => 1,
            ],
            [
                'email'    => 'atiqahlily@yahoo.com',
                'password' => bcrypt('123456'),
                'gender'   => 'Female',
                'age'      => 23,
                'name'     => 'Nuratiqahlily',
                'role'     => 2,
            ],
            [
                'email'    => 'bayah@unikl.edu.my',
                'password' => bcrypt('123456'),
                'gender'   => 'Female',
                'age'      => 23,
                'name'     => 'Bahiyah',
                'role'     => 2,
            ],
            [
                'email'    => 'anis@unikl.edu.my',
                'password' => bcrypt('123456'),
                'gender'   => 'Female',
                'age'      => 23,
                'name'     => 'Anis',
                'role'     => 2,
            ],
        ];

        foreach ($data as $dat) {
            User::create($dat);
        }
    }
}
