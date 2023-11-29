<?php

namespace App\Models;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class Follower extends Model
{
    use HasFactory;
    protected $table = 'followers';
    protected $fillable = [
        'user_id',
        'employer_id',
    ];


    public function getFollower()
    {
        $follower = Follower::where('followers.user_id', Auth::user()->id)
            ->leftJoin('followers', 'followers.id', 'followers.user_id')
            ->leftJoin('employer', 'employer.id', 'followers.employer_id')
            ->select('*', 'followers.id as idfollower')
            ->get();
        return $follower;
    }
}