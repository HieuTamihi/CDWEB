<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class FollowerController extends Controller
{
    private $follower;
    public function __construct()
    {
        $this->follower = new Follower();
    }

    public function index()
    {
        if (Auth::check()) {
            $follower = $this->follower->getFollower();
            return view('users.follower.theodoi', compact('follower'));
        } else {
            abort(404);
        }
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

    public function destroy($id)
    {
        $follower = follower::find($id);

        if (!$follower) {
            return redirect()->route('follower.index')->with('error', 'Không tìm thấy công việc này!');
        } else {
            $follower->delete();
            return redirect()->route('follower.index')->with('success', 'Xóa thành công!');
        }
    }
}
