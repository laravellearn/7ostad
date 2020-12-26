<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $studies = Study::all();
        $grades = Grade::all();
        return view('admin.grades.all')
            ->with('studies',$studies)
            ->with('grades',$grades);
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
        Session::put($request->all());
        Grade::create($request->all());
        alert()->success('پایه تحصیلی با موفقیت ثبت شد','متن پیام');
        return back()->with('study_id_select');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        $studies = Study::all();
        $grades = Grade::all();
        return view('admin.grades.edit')
            ->with('studies',$studies)
            ->with('grades',$grades)
            ->with('grade',$grade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($request->all());
        alert()->success('ویرایش پایه تحصیلی با موفقیت انجام شد','متن پیام');
        return redirect('/admin/grades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        alert()->success('پایه تحصیلی با موفقیت حذف شد','متن پیام');
        return back();
    }
}
