<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\CV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('users.cv.addCV');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $this->cv->addCV($request->all());
            return redirect()->route('cv.index')->with('msg', ' Tạo CV mới thành công !');
        }
        else{
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
    public function edit(CV $cV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CV $cV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CV $cV)
    {
        //
    }
}
