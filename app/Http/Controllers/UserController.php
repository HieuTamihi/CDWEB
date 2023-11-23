<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $this->user = new User();
    }

    public function indexadmin()
    {
        $users = User::all();

        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
