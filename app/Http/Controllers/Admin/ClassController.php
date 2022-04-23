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

    //__create From page
    public function create()
    {
        return view('admin.class.create');
    }

    //__Store data
    public function store(Request $request)
    {
        $request -> validate([
            'class_name' => 'required|unique:classes'
        ]);
        $data = array(
            'class_name' => $request-> class_name,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        );
        DB::table('classes')->insert($data);
        return redirect()->back()->with('success', 'Class="' . $request-> class_name . '"Added Successful');
    }

    //__delete methode__//
    public function delete($id)
    {
        DB::table('classes')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Class"' . $request-> class_name . '"Deleted Successful');
    }

    //__edit
    public function edit($id)
    {
        $data = DB::table('classes')->where('id', $id)->first();
        return view('admin.class.edit', compact('data'));
    }

    //__edit
    public function update(Request $request, $id)
    {
        $request -> validate([
            'class_name' => 'required'
        ]);
        $data = array(
            'class_name' => $request-> class_name,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        );
        DB::table('classes')->where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Class"' . $request-> class_name . '"Update Successful');
    }
}
