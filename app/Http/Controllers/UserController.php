<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $user;
    private $users;
    public function __construct()
    {
        $this->users = new User();
    }

    public function indexadmin()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date|date_format:Y-m-d',
            'phone' => 'required|string|size:10'
        ]);

        if (!$validatedData) {
            return redirect()->back()->withErrors('loi');
        }
        $users = new User();
        $users->name = $request->get('name');
        $users->date = $request->get('date');
        $users->phone = $request->get('phone');
        $users->save();

        return redirect('/admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        if (Auth::check()) {
            $id = Auth::user()->id;
            $user = User::find($id);
            if ($user) {
                return view('users.index', compact('user'));
            } else {
                abort('404');
            }
        } else {
            abort('404');
        }
    }

public function edit1(string $id){
    return view('/admin.users.edit');
}


    public function sua(Request $request, string $id){
        $user = User::find($id);

        // Get the form data
        $name = $request->input('name');
        $email  = $request->input('email ');
        $password = $request->input('password');
        $date = $request->input('date');
        $phone = $request->input('phone');
        $role  = $request->input('role ');
        $status = $request->input('status');


        // Update the user post
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->date = $date;
        $user->phone = $phone;
        $user->role = $role;
        $user->status = $status;
        $user->save();

        // Redirect to the user index page
        return redirect('/admin.users.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date|date_format:Y-m-d',
            'phone' => 'required|string|size:10'
        ]);

        if (Auth::check()) {
            $id = Auth::user()->id;
            $user = User::find($id);

            if ($user) {
                $user->update($validatedData);
                return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        if ($users) {
            $users->delete();
            return redirect()->route('admin.users.index') -> with('success', 'xóa thành công' );
        } else {
            return redirect()->route('admin.users.index')->with('error', 'Không tìm thấy user nào ' . $id);
        }
    }
}
