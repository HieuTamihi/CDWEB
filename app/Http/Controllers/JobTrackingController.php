<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\jobTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobTrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $jobTracking;
    public function __construct()
    {
        $this->jobTracking = new jobTracking();
    }
    public function index()
    {
        if (Auth::check()) {
            $jobTracking = $this->jobTracking->getJobTracking();
            return view('users.job_tracking.theodoi', compact('jobTracking'));
        } else {
            abort(404);
        }
    }

    public function listJobTracking()
    {
        if (Auth::check()) {
            $jobTracking = $this->jobTracking->getJobTrackingAdmin();
            return view('admin.job_tracking.theodoi', compact('jobTracking'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $job_posting = Job::find($request->job_id);
            if ($job_posting) {
                $check = jobTracking::where('user_id', Auth::user()->id)
                    ->where('job_id', $request->job_id)
                    ->first();
                if (!$check) {
                    $jobTracking = new jobTracking();
                    $jobTracking->user_id = Auth::user()->id;
                    $jobTracking->job_id = $request->job_id;
                    $jobTracking->save();
                    return redirect()->route('job.index')->with('success', 'Đã thêm vào danh sách công việc đang theo dõi');
                } else {
                    return redirect()->route('job.index')->with('warning', 'Đã tồn tại công việc này trong danh sách theo dõi!');
                }
            } else {
                return redirect()->route('job.index')->with('error', 'Thêm vào danh sách công việc đang theo dõi thất bại!');
            }
        } else {
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(jobTracking $jobTracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jobTracking $jobTracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jobTracking $jobTracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jobTracking = jobTracking::find($id);

        if (!$jobTracking) {
            return redirect()->route('jobTracking.index')->with('error', 'Không tìm thấy công việc này!');
        } else {
            $jobTracking->delete();
            return redirect()->route('jobTracking.index')->with('success', 'Xóa thành công!');
        }
    }
}