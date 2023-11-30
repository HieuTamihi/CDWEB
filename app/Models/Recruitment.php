<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $table = 'recruitment';
    protected $fillable = [
        'customer_id',
        'job_posting_id',
        'CV_id',
        'Status',
        'Introduce',
        'File',
        'Status'
    ];
    public function getJobNew()
    {
        $jobNew = Job::orderBy('job_posting.id', 'desc')->paginate(12);
        return $jobNew;
    }
    public function getJobAdmin()
    {
        $jobs = Job::orderBy('job_posting.id', 'desc')->paginate(12);
        return $jobs;
    }
    public function listRecruitment()
    {
        $recruitment = Recruitment::leftJoin('users', 'users.id', 'recruitment.customer_id')
            ->leftJoin('job_posting', 'job_posting.id', 'recruitment.job_posting_id')
            ->select('*', 'recruitment.id as idRecruit','recruitment.status as tinhTrang')
            ->get();
        return $recruitment;
    }
}
