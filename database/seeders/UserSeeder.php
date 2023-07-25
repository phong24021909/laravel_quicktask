<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "admin",
            'last_name' => "abc",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'is_admin' => 1,
            'is_active' => 1,
            'username' => 'admin',
        ]);
    }
}
