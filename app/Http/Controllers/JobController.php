<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $job;
    private $jobs;
    public function __construct()
    {
        $this->job = new Job();
    }
    public function index()
    {
        $jobNew = $this->job->getJobNew();
        return view('users.job.index', compact('jobNew'));
    }

    public function indexadmin()
    {
        $jobs = Job::leftJoin('employer', 'job_posting.employer_id', 'employer.id')->get();

        return view('admin.job.index', compact('jobs'));
    }
    public function create()
    {
    }
    public function edit(string $id)
    {
        //
        return view('admin.blog.edit', compact('job'));
    }
    public function destroy($id)
    {
        $job = Job::find($id);

        if ($job) {
            $job->delete();

            return redirect()->route('admin.job.index');
        } else {
            return redirect()->route('admin.job.index')->with('error', 'Không tìm thấy công việc nào có ID là ' . $id);
        }
    }
}
