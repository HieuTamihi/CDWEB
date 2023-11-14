<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        // Lấy thông tin người dùng từ Google
        $user = Socialite::driver('google')->user();

        // Kiểm tra xem người dùng đã tồn tại trong hệ thống hay chưa
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // Nếu người dùng đã tồn tại, đăng nhập người dùng
            Auth::login($existingUser);
        } else {
            // Nếu người dùng chưa tồn tại, tạo người dùng mới
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->status = 1;
            $newUser->role = 1;
            $newUser->save();

            // Đăng nhập người dùng mới tạo
            Auth::login($newUser);
        }
        return redirect()->route('index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/index');
    }
}
