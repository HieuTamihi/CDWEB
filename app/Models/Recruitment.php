<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $table = 'CV_mananement';
    protected $fillable = [
        'employer_id ',
        'title',
        'experience',
        'type',
        'skills',
        'required',
        'salary',
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
}
