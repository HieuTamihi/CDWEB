<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email ',
        'password',
    ];
    public function getUserNew()
    {
        $userNew = User::orderBy('users.id', 'desc')->paginate(12);
        return $userNew;
    }
    public function getUserAdmin()
    {
        $users = User::orderBy('users.id', 'desc')->paginate(12);
        return $users;
    }
}
