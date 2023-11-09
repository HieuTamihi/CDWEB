<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'ấddd',
                'email' => 'asd@gmail.com',
                'password' => bcrypt('1233'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ấddd',
                'email' => 'as111d@gmail.com',
                'password' => bcrypt('1233'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
