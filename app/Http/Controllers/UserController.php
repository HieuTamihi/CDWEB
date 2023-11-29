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
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'date' => 'required|date|date_format:Y-m-d',
            'phone' => 'required|string|size:10',
        ]);

        if (!$validatedData) {
            return redirect()->back()->withErrors('loi');
        }
        $users = new User();
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->name = $request->name;
        $users->date = $request->date;
        $users->phone = $request->phone;
        $users->role = 2;
        $users->status = 1;
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

    public function edit1(string $id)
    {
        $user = User::find($id);
        return view('/admin.users.edit', compact('user'));
    }


    public function sua(Request $request, string $id)
    {
        $user = User::find($id);
        // Kiểm tra xem người dùng có tồn tại không
        if ($user) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'date' => $request->date,
                'phone' => $request->phone,
                'role' => $request->role,
                'status' => $request->status,
            ]);
            // Cập nhật thành công
            return redirect()->route('admin.users.index')->with('success', 'Cập nhật người dùng thành công');
        } else {
            // Người dùng không tồn tại
            return redirect()->route('admin.users.index')->with('danger', 'Người dùng không tồn tại');
        }

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
            return redirect()->route('admin.users.index')->with('success', 'xóa thành công');
        } else {
            return redirect()->route('admin.users.index')->with('error', 'Không tìm thấy user nào ' . $id);
        }
    }
}
