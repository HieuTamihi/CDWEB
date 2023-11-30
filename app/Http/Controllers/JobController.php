<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Follower;
use App\Models\Job;
use App\Models\report;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
            ->where('job_posting.status', 1)
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

    public function indexJob()
    {
        $listPost = Job::where('employer_id', Auth::user()->id)->get();
        return view('users.post-job.danhsach', compact('listPost'));
    }

    public function create()
    {
        $employers = Employer::all();
        return view('admin.job.create', compact('employers'));
    }

    public function createJob()
    {
        return view('users.post-job.postJob');
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

        $followers = Follower::leftJoin('users', 'users.id', 'followers.user_id')
            ->leftJoin('employer', 'employer.id', 'followers.employer_id')
            ->select('followers.id', 'users.email', 'users.name', 'followers.employer_id', 'employer.name_company')
            ->where('employer.id',  $job->employer_id)
            ->get();

        foreach ($followers as $follower) {
            var_dump($follower->email . '-' . $follower->name . '-' . $follower->employer_id);
            // Process each follower object here
            if ($follower->employer_id == $job->employer_id) {
                Mail::send('email.test', (['name' => $follower->name]), function ($email) use ($follower) {
                    $email->subject('tin công việc' . $follower->name_company);
                    $email->to($follower->email, $follower->name);
                });
            }
        }

        try {
            $job->save();
        } catch (Exception $exception) {
            // Handle database exceptions appropriately
            return back()->with('error', 'An error occurred while creating the job: ' . $exception->getMessage());
        }
        // Handle database exceptions appropriately

        return  redirect()->route('admin.job.index')->with('success', 'Công việc đã được tạo thành công!');
    }

    public function storeJob(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 3) {
                $validatedData = $request->validate([
                    'title' => 'required|string|max:255',
                    'experience' => 'required|string|max:255',
                    'type' => 'required|string|max:255',
                    'skills' => 'required|string|max:255',
                    'required' => 'required|string|max:255',
                    'salary' => 'required|string|max:255',
                ]);

                $job = new Job;
                $job->employer_id = Auth::user()->id;
                $job->title = $validatedData['title'];
                $job->experience = $validatedData['experience'];
                $job->type = $validatedData['type'];
                $job->skills = $validatedData['skills'];
                $job->required = $validatedData['required'];
                $job->salary = $validatedData['salary'];
                $job->status = 1;
                $job->save();

                return redirect()->route('indexJob')->with('success', 'Đăng tuyển công việc thành công!');
            } else {
                abort('404');
            }
        } else {
            return view('login');
        }
    }

    public function chiTietCongViec($id)
    {
        $job = Job::findOrFail($id);
        if (Auth::check()) {
            $checkReport = report::where('job_id', $id)
                ->where('user_id', Auth::user()->id)
                ->first();
            return view('users.post-job.chitietvieclam', compact('job', 'checkReport'));
        } else {
            return view('users.post-job.chitietvieclam', compact('job'));
        }
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $employers = employer::all();
        return view('admin.job.edit', compact('job', 'employers'));
    }
    public function editJob($encryptedId)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 3) {
                try {
                    $id = decrypt($encryptedId);
                    $job = Job::where('id', $id)
                        ->where('employer_id', Auth::user()->id)
                        ->first();

                    if ($job) {
                        return view('users.post-job.chinhSua', compact('job'));
                    } else {
                        abort(404);
                    }
                } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                    Log::error('Decryption failed: ' . $e->getMessage());
                    abort(404);
                }
            } else {
                abort(404);
            }
        } else {
            return view('login');
        }
    }

    public function watchJob($encryptedId)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 3) {
                try {
                    $id = decrypt($encryptedId);
                    $job = Job::where('id', $id)
                        ->where('employer_id', Auth::user()->id)
                        ->first();

                    if ($job) {
                        return view('users.post-job.watch', compact('job'));
                    } else {
                        abort(404);
                    }
                } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                    Log::error('Decryption failed: ' . $e->getMessage());
                    abort(404);
                }
            } else {
                abort(404);
            }
        } else {
            return view('login');
        }
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
        } catch (Exception $exception) {
            // Handle database exceptions appropriately
            return back()->with('error', 'An error occurred while creating the job: ' . $exception->getMessage());
        }
        return redirect()->route('admin.job.index')->with('success', 'Job updated successfully.');
    }

    public function showJob($id)
    {
        $showJob = Job::find($id);
        if (!$showJob) {
            return back();
        }
        return view('users.post-job.chitietvieclam', compact('showJob'));
    }
    public function updateJob(Request $request, $encryptedId)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 3) {
                $validatedData = $request->validate([
                    'title' => 'required|string|max:255',
                    'experience' => 'required|string|max:255',
                    'type' => 'required|string|max:255',
                    'skills' => 'required|string|max:255',
                    'required' => 'required|string|max:255',
                    'salary' => 'required|string|max:255',
                ]);

                try {
                    $id = decrypt($encryptedId);
                    $job = Job::where('id', $id)
                        ->where('employer_id', Auth::user()->id)
                        ->first();
                    if ($job) {
                        $job->employer_id = Auth::user()->id;
                        $job->title = $validatedData['title'];
                        $job->experience = $validatedData['experience'];
                        $job->type = $validatedData['type'];
                        $job->skills = $validatedData['skills'];
                        $job->required = $validatedData['required'];
                        $job->salary = $validatedData['salary'];
                        $job->status = 1;
                        $job->update();
                        return redirect()->route('indexJob')->with('success', 'Cập nhật công việc đăng tuyển thành công!');
                    } else {
                        abort(404);
                    }
                } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                    Log::error('Decryption failed: ' . $e->getMessage());
                    abort(404);
                }
            } else {
                abort('404');
            }
        } else {
            return view('login');
        }
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

    public function searchAdmin(Request $request)
    {
        $keyword = $request->input('keyword');
        // Sử dụng model để tìm kiếm dữ liệu
        $jobs = Job::leftJoin('employer', 'job_posting.employer_id', 'employer.id')
            ->where('title', 'like', '%' . $keyword . '%')
            ->select('*', 'job_posting.id as idJob')
            ->get();

        return view('admin.job.results', compact('jobs', 'keyword'));
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        // Sử dụng model để tìm kiếm dữ liệu
        $job = Job::leftJoin('employer', 'job_posting.employer_id', 'employer.id')
            ->where('title', 'like', '%' . $keyword . '%')
            ->select('*', 'job_posting.id as idJob')
            ->get();
        return view('users.search_job.results', compact('job', 'keyword'));
    }

    // public function sendemail()
    // {
    //     $job =  Job::find(11);
    //     $employer = Employer::find(1);
    //     $followers = Follower::leftJoin('users', 'users.id', 'followers.user_id')
    //         ->leftJoin('employer', 'employer.id', 'followers.employer_id')
    //         ->select('followers.id', 'users.email', 'users.name', 'followers.employer_id', 'employer.name_company')
    //         ->where('employer.id',  $job->employer_id)
    //         ->get();

    //     foreach ($followers as $follower) {
    //         var_dump($follower->email . '-' . $follower->name . '-' . $follower->employer_id);
    //         // Process each follower object here
    //         if ($follower->employer_id == $job->employer_id) {
    //             Mail::send('email.test', (['name' => $follower->name]), function ($email) use ($follower) {
    //                 $email->subject('tin công việc' . $follower->name_company);
    //                 $email->to($follower->email, $follower->name);
    //             });
    //         }
    //     }
    //     // foreach ($followers as  $item) {

    //     if ($item->employer_id == $job->employer_id) {
    //         Mail::send('email.test', (['name' => $employer->name_company]), function ($email) use ($follower) {
    //             $email->to($item->email, $item->name);
    //         });
    //     }
    // }

    public function deleteJob($encryptedId)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 3) {
                try {
                    $id = decrypt($encryptedId);
                    $job = Job::where('id', $id)
                        ->where('employer_id', Auth::user()->id)
                        ->first();
                    if ($job) {
                        $job->delete();
                        return redirect()->route('indexJob')->with('success', 'Xóa công việc đăng tuyển thành công!');
                    } else {
                        return redirect()->route('indexJob')->with('error', 'Không tìm thấy công việc này!');
                    }
                } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                    Log::error('Decryption failed: ' . $e->getMessage());
                    abort(404);
                }
            } else {
                abort('404');
            }
        } else {
            return view('login');
        }
    }
    public function baoCaoCongViec(Request $request)
    {
        try {
            $data = $request->all();
            if (Auth::check()) {
                $check = report::where('user_id', Auth::user()->id)
                    ->where('job_id', $data['buttonValue'])
                    ->first();
                if (!$check) {
                    $report = new report();
                    $report->user_id = Auth::user()->id;
                    $report->job_id = $data['buttonValue'];
                    $report->status = 1;
                    $report->save();
                    return response()->json(['status' => 'success', 'message' => 'Báo cáo công việc thành công!']);
                }
            } else {
                return view('login');
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Báo cáo công việc thất bại!']);
        }
    }
    public function listBaoCao()
    {
        $report = report::leftJoin('job_posting', 'job_posting.id', 'report.job_id')
            ->leftJoin('users', 'users.id', 'report.user_id')
            ->select('*', 'report.status as tinhTrang', 'report.id as idRP')
            ->where('report.status', '!=', 2)
            ->where('report.status', '!=', 3)
            ->get();
        return view('admin.report.index', compact('report'));
    }
    public function capNhatBaoCao(Request $request, $encryptedId)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                try {
                    $id = decrypt($encryptedId);
                    $report = report::where('user_id', Auth::user()->id)
                        ->where('id', $id)
                        ->first();
                    if ($report) {
                        if ($request->action == 1) {
                            $report->status = 2;
                            $report->save();
                            $job = Job::where('id', $report->job_id)->first();
                            $job->status = 2;
                            $job->save();
                            return redirect()->back()->with('success', 'Xác nhận thành công!');
                        }
                        if ($request->action == 2) {
                            $report->status = 3;
                            $report->save();
                            return redirect()->back()->with('success', 'Hủy thành công!');
                        } else {
                            return redirect()->back()->with('error', 'Lỗi!');
                        }
                    } else {
                        return redirect()->back()->with('error', 'Không tìm báo cáo này!');
                    }
                } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                    Log::error('Decryption failed: ' . $e->getMessage());
                    abort(404);
                }
            } else {
                abort('404');
            }
        } else {
            return view('login');
        }
    }
}
