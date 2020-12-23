<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Lessongroup;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $lessongroups = Lessongroup::all();
        $studies = Study::all();
        return view('admin.books.all')
            ->with('books',$books)
            ->with('lessongroups',$lessongroups)
            ->with('studies',$studies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        Session::put($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','متن پیام')->persistent('خیلی خوب');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $books = Book::all();
        $lessongroups = Lessongroup::all();
        return view('admin.books.edit')
            ->with('lessongroups',$lessongroups)
            ->with('book',$book)
            ->with('books',$books);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        alert()->success('ویرایش کتاب با موفقیت انجام شد','متن پیام')->persistent('خیلی خوب');
        return redirect('/admin/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        alert()->success('کتاب درسی با موفقیت حذف شد', 'متن پیام')->persistent('خیلی خوب');
        return redirect('admin/books');
    }
}
