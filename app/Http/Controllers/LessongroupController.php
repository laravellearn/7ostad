<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Lessongroup;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LessongroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $studies = Study::all();
        $grades = Grade::all();
        $lessongroups = Lessongroup::all();
        return view('admin.lessongroups.all')
            ->with('lessongroups',$lessongroups)
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
    public function GetGrade($study_id)
    {
        $grd = Grade::where('study_id', '=', $study_id)->get();
        return json_encode($grd);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lessongroup::create($request->all());
        Session::put($request->all());
        alert()->success('گروه درسی با موفقیت ثبت شد', 'متن پیام')->persistent('خیلی خوب');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lessongroup  $lessongroup
     * @return \Illuminate\Http\Response
     */
    public function show(Lessongroup $lessongroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lessongroup  $lessongroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Lessongroup $lessongroup)
    {
        $grades = Grade::all();
        $studies = Study::all();
        $lessongroups = Lessongroup::all();
        return view('admin.lessongroups.edit')
            ->with('lessongroup',$lessongroup)
            ->with('grades',$grades)
            ->with('studies',$studies)
            ->with('lessongroups',$lessongroups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lessongroup  $lessongroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lessongroup $lessongroup)
    {
        $lessongroup->update($request->all());
        alert()->success('اطلاعات با موفقیت ویرایش شد','متن پیام')->persistent('خیلی خوب');
        return redirect('/admin/lessongroups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lessongroup  $lessongroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lessongroup $lessongroup)
    {
        $lessongroup->delete();
        alert()->success('گروه درسی با موفقیت حذف شد', 'متن پیام')->persistent('خیلی خوب');
        return back();
    }
}
