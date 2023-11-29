<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\CV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\PDF;


class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $cv;

    public function __construct()
    {
        $this->cv = new CV();
    }
    public function index()
    {
        if (Auth::check()) {
            $cv_management = CV::where('customer_id', Auth::user()->id)->get();
            return view('users.cv.manageCV', compact('cv_management'));
        }
    }

    public function listCV()
    {
        if (Auth::check()) {
            $cv_management = CV::all();
            return view('admin.cv.index', compact('cv_management'));
        }
    }

    public function watchCV(string $id)
    {
        if (Auth::check()) {
            $cv = CV::where('id', $id)->where('customer_id', Auth::user()->id)->first();
            if ($cv) {
                return view('users.cv.seeCV', compact('cv'));
            } else {
                abort('404');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.cv.addCV');
    }

    public function createCV()
    {
        return view('admin.cv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $this->cv->addCV($request->all());
            return redirect()->route('cv.index')->with('msg', ' Tạo CV mới thành công !');
        } else {
            return view('login');
        }
    }

    public function storeCV(Request $request)
    {
        if (Auth::check()) {
            $this->cv->addCV($request->all());
            return redirect()->route('listCV')->with('success', ' Tạo CV mới thành công !');
        } else {
            return view('login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CV $cV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cv1 = cv::findOrFail($id);
        return view('users.cv.edit', compact('cv1'));
    }

    public function editCV($id)
    {
        $cv1 = cv::findOrFail($id);
        return view('admin.cv.edit', compact('cv1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Get the blog post
        $cv = CV::find($id);

        // Get the form data
        $Name_CV = $request->input('Name_CV');
        $full_name = $request->input('full_name');
        $gender = $request->input('gender');
        $avatar = $request->file('avatar');
        $apply_position = $request->input('apply_position');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $Date = $request->date('Date');
        $exp_work = $request->input('exp_work');
        $School_name = $request->input('School_name');
        $Learn_time = $request->input('Learn_time');
        $Majors = $request->input('Majors');
        $infor_order = $request->input('infor_order');
        // Update the blog post
        $cv->Name_CV = $Name_CV;
        $cv->full_name = $full_name;
        $cv->gender = $gender;
        $cv->apply_position = $apply_position;
        $cv->email = $email;
        $cv->phone_number = $phone_number;
        $cv->Date = $Date;
        $cv->exp_work = $exp_work;
        $cv->School_name = $School_name;
        $cv->Learn_time = $Learn_time;
        $cv->Majors = $Majors;
        $cv->infor_order = $infor_order;

        if ($avatar) {
            $filename = time() . '-' . $avatar->getClientOriginalName();
            $avatar->move(public_path('images/cv'), $filename);
            $cv->image = $filename;
        }
        $cv->save();
        // Redirect to the blog index page
        return redirect()->route('cv.index')->with('success', 'Cap nhat thanh cong CV!');
    }

    public function updateCV(Request $request, string $id)
    {
        $cv = CV::find($id);
        $avatar = $request->file('avatar');
        if ($cv) {
            if ($avatar) {
                $filenameWithExtension = $avatar->getClientOriginalName();
                $avatar->move('images/cv', $filenameWithExtension);

                $cv->update([
                    'Name_CV' =>  $request->Name_CV,
                    'full_name' => $request->full_name,
                    'gender' => $request->gender,
                    'apply_position' => $request->apply_position,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'Date' => $request->Date,
                    'exp_work' => $request->exp_work,
                    'School_name' => $request->School_name,
                    'Learn_time' => $request->Learn_time,
                    'Majors' => $request->Majors,
                    'infor_order' => $request->infor_order,
                    'avatar' => $filenameWithExtension,
                ]);
                // Cập nhật thành công
                return redirect()->route('listCV')->with('success', 'Cap nhat thanh cong CV!');
            } else {
                $cv->update([
                    'Name_CV' =>  $request->Name_CV,
                    'full_name' => $request->full_name,
                    'gender' => $request->gender,
                    'apply_position' => $request->apply_position,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'Date' => $request->Date,
                    'exp_work' => $request->exp_work,
                    'School_name' => $request->School_name,
                    'Learn_time' => $request->Learn_time,
                    'Majors' => $request->Majors,
                    'infor_order' => $request->infor_order,
                ]);
                // Cập nhật thành công
                return redirect()->route('listCV')->with('success', 'Cap nhat thanh cong CV!');
            }
        } else {
            return redirect()->route('listCV')->with('danger', 'CV không tồn tại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cv = cv::findOrFail($id);
        if ($cv) {
            $cv->delete();
            return redirect()->route('cv.index');
        } else {
            return redirect()->route('cv.index')->with('error', 'Không tìm thấy cv nào ' . $cv);
        }
    }
    public function deleteCV($id)
    {
        $cv = CV::find($id);

        if (!$cv) {
            return redirect()->route('listCV')->with('error', 'Không tìm thấy CV này!');
        } else {
            $cv->delete();
            return redirect()->route('listCV')->with('success', 'Xóa thành công!');
        }
    }


    public function exportPDF($file_cv)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($file_cv));
        return $pdf->stream();
    }
}