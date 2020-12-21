<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Study;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $studies = Study::WHERE('status',true)->get();
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
        Grade::create($request->all());
        alert()->success('رشته تحصیلی با موفقیت ثبت شد','متن پیام')->persistent('خیلی خوب');
        $study_id_select = $request->session()->put('study_id');
        dd($study_id_select);
        return back()->with('study_id_select',$study_id_select);
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
        alert()->success('ویرایش رشته تحصیلی با موفقیت انجام شد','متن پیام')->persistent('خیلی خوب');
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
        alert()->success('رشته تحصیلی با موفقیت حذف شد','متن پیام')->persistent('خیلی خوب');
        return back();
    }
}
