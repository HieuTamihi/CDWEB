<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class jobTracking extends Model
{
    use HasFactory;
    protected $table = 'job_tracking';
    protected $fillable = ['user_id', 'job_id'];

    public function getJobTracking()
    {
        $jobTracking = jobTracking::where('job_tracking.user_id', Auth::user()->id)
            ->leftJoin('job_posting', 'job_posting.id', 'job_tracking.job_id')
            ->leftJoin('employer', 'employer.id', 'job_posting.employer_id')
            ->select('*','job_tracking.id as idTracking')
            ->get();
        return $jobTracking;
    }
}
