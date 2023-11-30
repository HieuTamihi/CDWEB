<?php

namespace App\Http\Controllers;

use App\Mail\MyDatabaseMail;
use App\Models\Job;
use App\Models\Recruitment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RecruitmentController extends Controller
{
    private $recruitment;
    public function __construct()
    {
        $this->recruitment = new Recruitment();
    }
    public function index()
    {
        $listCrui = $this->recruitment->listRecruitment();
        return view('admin.recruitment.index', compact('listCrui'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listType = Job::all();
        return view('admin.recruitment.create', compact('listType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $dataRecruitment = [
                'customer_id' => Auth::user()->id,
                'job_posting_id' => $request->job_posting_id,
                'CV_id' => 1,
                'Status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $recruitment = new Recruitment($dataRecruitment);
            $recruitment->save();

            return redirect()->route('recruitment.index')->with('success', 'Thêm thành công.');
        } else {
            return view('login');
        }
    }

    public function createUngTuyen(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 2 || Auth::user()->role == 1) {
                try {
                    $validatedData = $request->validate([
                        'Introduce' => 'required|string|max:255',
                    ]);

                    $recruitment = new Recruitment();
                    $recruitment->customer_id = Auth::user()->id;
                    $recruitment->job_posting_id = decrypt($request->action);
                    $recruitment->Introduce = $validatedData['Introduce'];
                    $recruitment->Status = 1;
                    $recruitment->save();

                    return redirect()->back()->with('success', 'Ứng tuyển thành công!');
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

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recruitment = Recruitment::leftJoin('users', 'users.id', 'recruitment.customer_id')
            ->leftJoin('job_posting', 'job_posting.id', 'recruitment.job_posting_id')
            ->select('*', 'recruitment.id as idRecruit', 'job_posting.title as position')
            ->where('recruitment.id', $id)->first();

        $listType = Job::all();

        return view('admin.recruitment.show', compact('recruitment', 'listType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $recruitment = Recruitment::leftJoin('users', 'users.id', 'recruitment.customer_id')
            ->leftJoin('job_posting', 'job_posting.id', 'recruitment.job_posting_id')
            ->select('*', 'recruitment.id as idRecruit')
            ->where('recruitment.id', $id)->first();
        $listType = Job::all();
        return view('admin.recruitment.edit', compact('recruitment', 'listType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $recruitment = Recruitment::find($id);
        if (!$recruitment) {
            return redirect()->route('recruitment.index')->with('error', 'Không tìm thấy');
        } else {
            $recruitment->update($request->all());
            $user = User::where('id', $recruitment->customer_id)->first();
            if ($user->email == $request->email) {
                return redirect()->route('recruitment.index')->with('error', 'Email đã tồn tại');
            } else {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->save();
            }

            return redirect()->route('recruitment.index')->with('success', 'Cập nhật thành công.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recruitment = Recruitment::find($id);

        if (!$recruitment) {
            return redirect()->route('recruitment.index')->with('error', 'Không tìm thấy bản ghi.');
        } else {
            $recruitment->delete();
            return redirect()->route('recruitment.index')->with('success', 'Xóa thành công.');
        }
    }

    public function searchAdmin(Request $request)
    {
        $keyword = $request->input('keyword');

        // Sử dụng model để tìm kiếm dữ liệu
        $listCrui = Recruitment::where('name_company', 'like', '%' . $keyword . '%')->get();

        return view('admin.recruitment.results', compact('listCrui', 'keyword'));
    }
    public function xetDuyet($id)
    {
        $recruitment = Recruitment::leftJoin('users', 'users.id', 'recruitment.customer_id')
            ->where('recruitment.id', $id)
            ->select('*', 'recruitment.Status as tinhTrang')
            ->first();
        // Gửi email
        if ($recruitment->tinhTrang == 1) {
            $recipientEmail = $recruitment->email;
            Mail::to($recipientEmail)->send(new MyDatabaseMail());
            Recruitment::where('id', $id)->update(['Status' => 2]);
            return redirect()->route('recruitment.index')->with('success', 'Xét duyệt thành công và email đã được gửi.');
        } else {
            return redirect()->route('recruitment.index')->with('error', 'Lỗi xét duyệt');
        }
    }
}
