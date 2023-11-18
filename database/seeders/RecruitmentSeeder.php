<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recruitment')->insert([
            [
                'customer_id' => 1,
                'job_posting_id' => 1,
                'CV_id' => 1,
                'Status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
