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
        \DB::table('users')->insert([
            'name' => 'Casey Bailey',
            'email' => 'cbailey@pulaskitech.edu',
            'password' => bcrypt('kckckc'),
            'isAdmin' => 1,
            'personal_id' => ' 116004734',

        ]);
        \DB::table('users')->insert([
            'name' => 'Terry Patterson',
            'email' => 'tpatterson@pulaskitech.edu',
            'password' => bcrypt('password'),
            'isAdmin' => 1,
            'personal_id' => ' 787005383',
        ]);
        \DB::table('users')->insert([
            'name' => 'Jasmine Williams',
            'email' => 'jcwilliams@pulaskitech.edu',
            'password' => bcrypt('password'),
            'isAdmin' => 1,
            'personal_id' => '485007588',
        ]);

        \DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'ofs@pulaskitech.edu',
            'password' => bcrypt('kc'),
            'personal_id' => '123456789',
        ]);
    }
}
