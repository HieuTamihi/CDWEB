<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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

}
