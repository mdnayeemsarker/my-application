<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = DB::table('classes')->get();
        $books = DB::table('books')->get();
        $teachers = DB::table('teachers')->get();
        return view('admin.teachers.index', compact('classes', 'books', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        $books = DB::table('books')->get();
        return view('admin.teachers.create', compact('classes', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'class_id' => 'required',
            'book_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $data = array(
            'class_id' => $request->class_id,
            'book_id' => $request->book_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        );
        DB::table('teachers')->insert($data);
        return redirect()->back()->with('success', 'Teacher "' . $request-> name . '" Added Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classes = DB::table('classes')->get();
        $books = DB::table('books')->get();
        $teachers = DB::table('teachers')->where('id', $id)->first();
        return view('admin.teachers.show', compact('classes', 'books', 'teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = DB::table('classes')->get();
        $books = DB::table('books')->get();
        $teachers = DB::table('teachers')->where('id', $id)->first();
        return view('admin.teachers.edit', compact('classes', 'books', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request -> validate([
            'class_id' => 'required',
            'book_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $data = array(
            'class_id' => $request->class_id,
            'book_id' => $request->book_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        );
        DB::table('teachers')->where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Teacher "' . $request-> name . '" Updated Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teachers')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Teacher Deleted Successful');
    }
}
