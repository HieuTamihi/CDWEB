<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    private $user;
    private $users;
    public function __construct()
    {
        $this->user = new User();
    }

    public function indexadmin()
    {
        $users = User::all();

        return view('admin.users.index', [
            'users' => $users,
        ]);
    }
}
