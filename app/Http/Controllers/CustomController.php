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
        return view('about', ['name' => 'Samantha']);
    }
    public function contact()
    {
        abort(404);
        // return view('contact');
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
    public function csrf()
    {
        return view('csrf');
    }
    public function StudentStore(Request $request)
    {
        dd($request->all());
    }
    public function about_store(Request $request){
        dd($request->all());
    }

    public function contact_store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|unique:users|max:80|email',
            'password' => 'required|min:6|max:12',
        ]);
        dd($request->all());
    }

}
