<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function country()
    {
        return view('country');
    }
    public function controller()
    {
        return view('controller');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

}
