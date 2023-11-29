<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('job_posting')->insert([
            [
                'employer_id' => 1,
                'title' => 'Software Developer (PHP, Lavarel)',
                'experience' => '1 năm',
                'type' => 'Junior, Middle, Senior',
                'skills' => 'Có kinh nghiệm tối thiểu 2 năm lập trình ngôn ngữ PHP.
                Sử dụng thành thạo cơ sở dữ liệu MySQL, PostgrepSQL.',
                'required' => 'Khả năng trình bày, giao tiếp: Rõ ràng, logic và khá lưu loát.',
                'salary' => '1000$',
                'status' => 1,
                'formality'=>'In Office',
                'Contract_type' =>'Fulltime',
                'technology_used'=>'Python',
            ],
            [
                'employer_id' => 2,
                'title' => 'Java Developer (Junior - Middle)',
                'experience' => '1 năm, 3 năm',
                'type' => 'Junior, Middle',
                'skills' => 'Bachelor or Master degree in Computer Science, IT or related field.
                1 - 3+ years of experience in Java development or related field.',
                'required' => 'Develop and maintain high-quality Java applications using modern technologies and best practices.
                Integrate applications with third-party services and APIs.
                Design and implement database schemas and queries.',
                'salary' => '1500$',
                'status' => 1,
                'formality'=>'In Office',
                'Contract_type' =>'Fulltime',
                'technology_used'=>'Python',
            ],
            [
                'employer_id' => 3,
                'title' => 'Lập Trình Viên Android',
                'experience' => '06 tháng',
                'type' => 'Junior',
                'skills' => 'Kiến thức cơ bản và tư duy về Java/Kotlin, lập trình Android, OOP
                Đã làm việc hoặc có kinh nghiệm với: Multi Module, MVVM, JetPack, Xml layouts, Compose hoặc các kiến trúc, thiết kế mới',
                'required' => 'Chủ động, trách nhiệm cao với công việc, khả năng cống hiến và gắn bó lâu dài với Công ty.
                Đọc hiểu tài liệu Tiếng Anh',
                'salary' => '2000$',
                'status' => 1,
                'formality'=>'In Office',
                'Contract_type' =>'Fulltime',
                'technology_used'=>'Python',
            ],
            [
                'employer_id' => 4,
                'title' => 'Devops Engineer (Docker, Kubernetes)',
                'experience' => '1 năm, 3 năm',
                'type' => 'Junior, Middle, Senior',
                'skills' => 'Có hiểu biết ngôn ngữ máy tính: Python, Bash và một điểm cộng nếu Golang, PHP, C#.…
                Hiểu biết, có khả năng thiết lập và vận hành hệ thống Kubernetes/Docker Container.',
                'required' => 'Kiến thức về phương pháp phát triển, an ninh mạng và có mối quan tâm sâu sắc đến các công nghệ mới và cải tiến hệ thống nói chung.
                Đọc hiểu và viết tài liệu chuyên ngành bằng tiếng Anh.',
                'salary' => '2000$',
                'status' => 1,
                'formality'=>'In Office',
                'Contract_type' =>'Fulltime',
                'technology_used'=>'Python',
            ],
            [
                'employer_id' => 1,
                'title' => 'Python Developer',
                'experience' => '1 năm, 3 năm',
                'type' => 'Middle, Senior',
                'skills' => '1-3 years of experience in programming Python.
                Experienced in programming with RDBMS such as MySQL / PostgreSQL databases.',
                'required' => 'Implement back-end features & business logic, design database & write efficient queries.
                Build and maintain backend systems for cloud platform projects with Python.',
                'salary' => '3000$',
                'status' => 1,
                'formality'=>'In Office',
                'Contract_type' =>'Fulltime',
                'technology_used'=>'Python',
            ],
            [
                'employer_id' => 2,
                'title' => 'Senior Frontend Developer (ReactJS/NextJS)',
                'experience' => '3 năm',
                'type' => ' Middle, Senior',
                'skills' => 'Strong knowledge in Reactjs/Nextjs/Threejs (module, page, client/server side render)
                Expertise in compiler: Webpack, browserify, npm, yarn',
                'required' => 'Bachelor’s degree in computer science, Software development, Information technology, or experiences in other related fields, etc.
                From 3+ years of frontend software development experience in software/digital product company',
                'salary' => '1000$',
                'status' => 1,
                'formality'=>'In Office',
                'Contract_type' =>'Fulltime',
                'technology_used'=>'Python
                Data Engineer
                Spark
                Kafka',
            ],
        ]);
    }
}
