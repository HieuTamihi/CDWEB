<?php

namespace App\Http\Controllers;

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
        $jobs = Job::all();

        return view('admin.job.index', [
            'jobs' => $jobs,
        ]);
    }
    public function create()
    {

    }
    public function edit(string $id)
    {
        //
        return view('admin.blog.edit',compact('job'));
    }

}
