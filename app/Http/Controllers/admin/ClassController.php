<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    //__construct
    public function __construct()
    {
        $this->middleware('auth');
    }

    //__Index methode for all class from database
    public function index()
    {
        $class = DB::table('classes')->get();
        // dd($class);
        return view('admin.class.index', compact('class'));
    }
}
