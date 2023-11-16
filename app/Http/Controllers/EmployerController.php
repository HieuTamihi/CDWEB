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
        return view('users.employer.index', compact('employerNew'));
    }
    public function indexadmin()
    {
        $employers = Employer::all();

        return view('admin.employer.index', [
            'employers' => $employers,
        ]);
    }
}
