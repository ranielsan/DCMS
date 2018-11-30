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
        DB::table('users')->insert([
        	'name' => 'Administration',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('adminadmin'),
            'username' => 'admin'
        ]);
    }
}
