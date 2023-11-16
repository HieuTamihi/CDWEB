<?php

namespace App\Models;

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
        $employerNew = Employer::orderBy('employer.id', 'desc')->paginate(12);
        return $employerNew;
    }
    public function getEmployerAdmin()
    {
        $employers = Employer::orderBy('employer.id', 'desc')->paginate(12);
        return $employers;
    }
}
