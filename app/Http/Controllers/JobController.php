<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

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
        $job = Job::leftJoin('employer', 'job_posting.employer_id', 'employer.id')
            ->select('*', 'job_posting.id as idJob')
            ->get();
        $job->each(function ($jobDate) {
            $updatedAt = Carbon::parse($jobDate->updated_at);
            $timeAgo = $updatedAt->diffForHumans();
            $jobDate->formattedUpdateTime = $timeAgo;
        });
        return view('users.search_job.jobs', compact('job'));
    }

    public function indexadmin()
    {
        $jobs = Job::select('*', 'job_posting.id as stt')->leftJoin('employer', 'job_posting.employer_id', 'employer.id')->get();
        return view('admin.job.index', compact('jobs'));
    }
    public function create()
    {
        $employers = Employer::all();
        return view('admin.job.create', compact('employers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_company' => 'required|exists:employer,id',
            'title' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'required' => 'nullable',
            'salary' => 'required|string|max:255',
            'status' => 'required|string',
        ]);
        $employer = Employer::find($validatedData['name_company']);

        if (!$employer->id) {
            return back()->with('error', 'employer not in database');
        }

        $job = new Job;
        $job->employer_id = $employer->id;
        $job->title = $validatedData['title'];
        $job->experience = $validatedData['experience'];
        $job->type = $validatedData['type'];
        $job->skills = $validatedData['skills'];
        $job->required = $validatedData['required'];
        $job->salary = $validatedData['salary'];
        if ($validatedData['status'] != '1' && $validatedData['status'] != '2') {
            return back()->with('error', 'status not in database');
        } else {
            $job->status = $validatedData['status'];
        }
        try {
            $job->save();
        } catch (\Exception $exception) {
            // Handle database exceptions appropriately
            return back()->with('error', 'An error occurred while creating the job: ' . $exception->getMessage());
        }
        return redirect()->route('admin.job.index')->with('success', 'Công việc đã được tạo thành công!');
    }
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $employers = employer::all();
        return view('admin.job.edit', compact('job', 'employers'));
    }
    public function update(Request $request, Job $job)
    {
        alert($job->id);
        $validatedData = $request->validate([
            'name_company' => 'required|exists:employer,id',
            'title' => 'required|string|max:250',
            'experience' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'required' => 'nullable',
            'salary' => 'required|string|max:255',
            'status' => 'required|string',
        ]);
        $employer = Employer::find($validatedData['name_company']);

        if (!$employer) {
            return back()->with('error', 'employer not in database');
        }
        $job->employer_id = $employer->id;

        $job->title = $validatedData['title'];
        $job->experience = $validatedData['experience'];
        $job->type = $validatedData['type'];
        $job->skills = $validatedData['skills'];
        $job->required = $validatedData['required'];
        $job->salary = $validatedData['salary'];
        if ($validatedData['status'] != '1' && $validatedData['status'] != '2') {
            return back()->with('error', 'status not in database');
        } else {
            $job->status = $validatedData['status'];
        }
        try {
            $job->update();
        } catch (\Exception $exception) {
            // Handle database exceptions appropriately
            return back()->with('error', 'An error occurred while creating the job: ' . $exception->getMessage());
        }
        return redirect()->route('admin.job.index')->with('success', 'Job updated successfully.');
    }

    public function showJob($id)
    {
        $showJob = Job::find($id);
        if(!$showJob){
            return back();
        }
        return view('users.post-job.chitietvieclam',compact('showJob'));
    }
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        if ($job) {
            $job->delete();
            return redirect()->route('admin.job.index');
        } else {
            return redirect()->route('admin.job.index')->with('error', 'Không tìm thấy công việc nào có ID là ' . $id);
        }
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        // Sử dụng model để tìm kiếm dữ liệu
        $jobs = Job::where('title', 'like', '%' . $keyword . '%')->get();

        return view('admin.job.results', compact('jobs','keyword'));
    }
}
