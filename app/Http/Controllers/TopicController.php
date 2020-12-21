<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Lessongroup;
use App\Models\Study;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics= Topic::all();
        $books = Book::all();
        $lessongroups = Lessongroup::all();
        $studies = Study::all();
        return view('admin.topics.all')
            ->with('books',$books)
            ->with('lessongroups',$lessongroups)
            ->with('studies',$studies)
            ->with('topics',$topics);

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
        Topic::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','متن پیام')->persistent('خیلی خوب');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        $books = Book::all();
        $lessongroups = Lessongroup::all();
        $topics = Topic::all();
        return view('admin.topics.edit')
            ->with('lessongroups',$lessongroups)
            ->with('topic',$topic)
            ->with('books',$books)
            ->with('topics',$topics);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $topic->update($request->all());
        alert()->success('ویرایش مبحث با موفقیت انجام شد','متن پیام')->persistent('خیلی خوب');
        return redirect('/admin/topics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
        alert()->success('مبحث با موفقیت حذف شد', 'متن پیام')->persistent('خیلی خوب');
        return redirect('admin/topics');
    }
}
