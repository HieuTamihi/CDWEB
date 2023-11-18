<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
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
            'title' => 'required|string',
            'experience' => 'required|string',
            'type' => 'required|string',
            'skills' => 'required|string',
            'required' => 'nullable|string',
            'salary' => 'required|string',
            'status' => 'required|string',
        ]);
        $employer = Employer::find($validatedData['name_company']);

        if (!$employer) {
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
        $job->status = $validatedData['status'];
        $job->save();
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
            'title' => 'required|string',
            'experience' => 'required|string',
            'type' => 'required|string',
            'skills' => 'required|string',
            'required' => 'nullable|string',
            'salary' => 'required|string',
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
        $job->status = $validatedData['status'];
        $job->update();

        return redirect()->route('admin.job.index')->with('success', 'Job updated successfully.');
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
