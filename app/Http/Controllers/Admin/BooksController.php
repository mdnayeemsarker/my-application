<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BooksController extends Controller
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
        return view('admin.books.index', compact('books', 'classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        return view('admin.books.create', compact('classes'));
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
            'book_name' => 'required',
        ]);
        $data = array(
            'class_id' => $request-> class_id,
            'book_name' => $request-> book_name,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        );
        DB::table('books')->insert($data);
        return redirect()->back()->with('success', 'Book "' . $request-> book_name . '" Added Successful');
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
        $books = DB::table('books')->where('id', $id)->first();
        return view('admin.books.show', compact('classes', 'books'));
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
        $books = DB::table('books')->where('id', $id)->first();
        return view('admin.books.edit', compact('classes', 'books'));
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
            'book_name' => 'required',
        ]);
        $data = array(
            'class_id' => $request-> class_id,
            'book_name' => $request-> book_name,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        );
        DB::table('books')->where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Book "' . $request-> book_name . '" Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Books Deleted Successful');
    }
}
