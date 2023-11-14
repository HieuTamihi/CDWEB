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
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123123'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 1,
                'status' => 1,
            ],
            [
                'name' => 'customer1',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('user123123'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 2,
                'status' => 1,
            ],
            [
                'name' => 'employer1',
                'email' => 'employer@gmail.com',
                'password' => bcrypt('employer123123'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 3,
                'status' => 1,
            ]
        ]);
    }
}
