<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{
    private $follower;
    public function __construct()
    {
        $this->follower = new Follower();
    }
    public function store(Request $request)
    {
        if (Auth::check()) {
            $employer = Employer::find($request->id);

            if ($employer) {
                $check = Follower::where('user_id', Auth::user()->id)
                    ->where('employer_id', $request->id)
                    ->first();

                if (!$check) {
                    $follower = new Follower();
                    $follower->user_id = Auth::user()->id;
                    $follower->employer_id = $request->id;
                    $follower->save();

                    return redirect()->back()->with('success', 'Đã thêm vào danh sách công ty đang theo dõi');
                } else {
                    return redirect()->back()->with('warning', 'Đã tồn tại công ty này trong danh sách theo dõi!');
                }
            } else {
                return redirect()->back()->with('error', 'Thêm vào danh sách công ty đang theo dõi thất bại!');
            }
        } else {
            abort(404);
        }
    }
}