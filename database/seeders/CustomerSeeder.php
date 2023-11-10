<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('customer')->insert([
            [
                'email' => 'adad@gmail.com',
                'phone_number' => '0123456789',
                'full_name' => 'Trần Văn A',
                'Date' => '2023-11-25',
                'Address' => 'Võ Văn Ngân, Thủ Đức',
                'gender' => '1',
                'status' => '1',              
            ],
            [
                'email' => 'dien@gmail.com',
                'phone_number' => '0123456559',
                'full_name' => 'Trần Văn B',
                'Date' => '2020-11-25',
                'Address' => 'Thủ Dức',
                'gender' => '2',
                'status' => '3',              
            ],
            [
                'email' => 'hello@gmail.com',
                'phone_number' => '0522622700',
                'full_name' => 'Trần Văn C',
                'Date' => '2012-11-25',
                'Address' => 'Võ Văn Ngân, Thủ Đức',
                'gender' => '1',
                'status' => '1',              
            ],
            [
                'email' => 'hello2@gmail.com',
                'phone_number' => '0522622700',
                'full_name' => 'Trần Văn C',
                'Date' => '2022-11-25',
                'Address' => 'Võ Văn Ngân, Thủ Đức',
                'gender' => '1',
                'status' => '1',              
            ],
        ]);
    }
}
