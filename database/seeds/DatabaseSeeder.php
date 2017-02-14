<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //Inser data to roles
        DB::table('roles')->insert(['name' => 'admin','display_name' => 'Administrator','description' => '','created_at' => '2017-02-05 00:54:19','updated_at' => '2017-02-05 00:54:19',]);
        DB::table('roles')->insert(['name' => 'parents','display_name' => 'Parents of child','description' => '','created_at' => '2017-02-05 00:54:19','updated_at' => '2017-02-05 00:54:19',]);

        //Insert data to Users
        DB::table('Users')->insert([
            'name' => 'Amin',
            'gender' => 'male',
            'phone' => '015204520',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$EEw0J2zoOr4UrJRq.zyqE.m4NZSNciZErHWr5LZr1MFjpW1yyWjmO',
            'address' => 'bb',
            'role' => '1',
            'status' => '1',
        ]);


        //$this->call(UsersTableSeeder::class);
    }
}
