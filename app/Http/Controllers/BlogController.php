<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use Illuminate\Support\Facades\DB as FacadesDB;

class BlogController extends Controller
{
    public function index()
    {
        return view('/admin/blog/index');
    }
   
}
