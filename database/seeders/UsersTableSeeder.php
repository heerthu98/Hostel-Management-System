<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'warden',
            'email' => 'warden@gmail.com',
            'userroll' => 'warden',
            'password' => Hash::make('1234')
        ]);

        DB::table('users')->insert([
            'name' => 'subwarden',
            'email' => 'subwarden@gmail.com',
            'userroll' => 'subwarden',
            'password' => Hash::make('1234')
        ]);
    }
}
