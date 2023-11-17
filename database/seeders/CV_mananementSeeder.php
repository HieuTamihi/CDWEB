<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CV_mananementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cv_management')->insert([
            [
                'CV_id' => 1,
                'name' => 'Thanh Dien',
                'status' => 'đã duyệt',
            ],

        ]);
    }
}
