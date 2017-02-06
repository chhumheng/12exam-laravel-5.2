<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => '',
            'created_at' => '2017-02-05 00:54:19',
            'updated_at' => '2017-02-05 00:54:19',
        ]);

        DB::table('roles')->insert([
            'name' => 'parents',
            'display_name' => 'Parents of child',
            'description' => '',
            'created_at' => '2017-02-05 00:54:19',
            'updated_at' => '2017-02-05 00:54:19',
        ]);
    }
}
