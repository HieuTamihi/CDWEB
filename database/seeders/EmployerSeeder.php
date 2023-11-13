<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('employer')->insert([
            [
                'User_id' => '1',
                'name_company' =>'CÔNG TY TNHH THƯƠNG MẠI VÀ PHÁT TRIỂN CÔNG NGHỆ PHƯỢNG THIÊN',
                'address' => 'Võ Văn Ngân, Thủ Đức',
                'image' => 'photo-3-1678421742709735625943.jpg',
                'phone_number' => '0123456789',
            ],
            [
                'User_id' => '2',
                'name_company' =>'CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG HOÀNG KHANG',
                'address' => 'Kha Vạn Cân, Thủ Đức',
                'image' => 'photo-3-1678421742709735625943.jpg',
                'phone_number' => '0123456789',
            ],
            [
                'User_id' => '3',
                'name_company' =>'Công ty TNHH SX TM và DV Song Ân',
                'address' => 'Tô Ngọc Vân, Thủ Đức',
                'image' => 'photo-3-1678421742709735625943.jpg',
                'phone_number' => '0123456789',
            ],

        ]);
    }
}
