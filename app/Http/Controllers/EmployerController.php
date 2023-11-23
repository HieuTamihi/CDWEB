<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $employer;
    private $employers;
    public function __construct()
    {
        $this->employer = new Employer();
    }
    public function index()
    {
        $employerNew = $this->employer->getEmployerNew();
        return view('users.employer.index', compact('employerNew', 'employerFeatured'));
    }
    public function indexadmin()
    {
        $employers = Employer::all();

        return view('admin.employer.index', [
            'employers' => $employers,
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_company' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'featured' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,bmp',

        ]);

        if (!$validatedData) {
            return redirect()->back()->withErrors('loi');
        }

        $image = $request->file('image');
        $filename = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path('images/company'), $filename);

        $employer = new employer;
        $employer->name_company = $request->get('name_company');
        $employer->phone_number = $request->get('phone_number');
        $employer->User_id = 1;
        $employer->address = $request->get('address');
        $employer->featured = $request->get('featured');
        $employer->image = $filename;
        $employer->save();

        return redirect('/admin.employer.index');
    }
    public function create()
    {
        return view('admin.employer.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employer = Employer::findOrFail($id);

        return view('admin.employer.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Get the employer post
        $employer = Employer::find($id);

        $validatedData = $request->validate([
            'name_company' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'featured' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,bmp',

        ]);

        if (!$validatedData) {
            return redirect()->back()->withErrors('loi');
        }
        // Get the form data
        $name_company = $request->input('name_company');
        $phone_number = $request->input('phone_number');
        $featured = $request->input('featured');
        $image = $request->file('image');
        $address = $request->input('address');

        // Update the employer post
        $employer->name_company = $name_company;
        $employer->featured = $featured;
        $employer->address = $address;
        if ($image) {
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images/company'), $filename);
            $employer->image = $filename;
        }
        $employer->phone_number = $phone_number;
        $employer->save();

        // Redirect to the employer index page
        return redirect('/admin.employer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        if ($employer) {
            $employer->delete();

            return redirect()->route('admin.employer.index');
        } else {
            return redirect()->route('admin.employer.index')->with('error', 'Không tìm thấy employer nào ' . $id);
        }
    }
}
