<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employer';
    protected $fillable = [
        'User_id ',
        'Website',
        'Infor',
        'Responsibility',
        'Welfare',
        'name_company',
        'address',
        'image',
        'phone_number',
    ];
    public function getEmployerNew()
    {
        $employerNew = Employer::orderBy('employer.id', 'desc')
            ->leftJoin('job_posting', 'employer.id', 'job_posting.employer_id')
            ->select('*', 'employer.id as idEmploy')
            ->paginate(12);
        $employerNew->each(function ($employer) {
            $updatedAt = Carbon::parse($employer->updated_at);
            $timeAgo = $updatedAt->diffForHumans();
            $employer->formattedUpdateTime = $timeAgo;
        });
        return $employerNew;
    }
    public function getEmployerAdmin()
    {
        $employers = Employer::orderBy('employer.id', 'desc')->paginate(12);
        return $employers;
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function getEmployerFeatured()
    {
        $employerFeatured = Employer::where('featured', '1')->get();
        $employerFeatured->each(function ($employer) {
            $updatedAt = Carbon::parse($employer->updated_at);
            $timeAgo = $updatedAt->diffForHumans();
            $employer->formattedUpdateTime = $timeAgo;
        });
        return $employerFeatured;
    }
}
