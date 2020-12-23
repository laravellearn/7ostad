<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motivational;

class MotivationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivationals = Motivational::all();
        return view('admin.motivationals.all')
        ->with('motivationals',$motivationals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = auth()->user()->id;
        Motivational::create($request->all());
        alert()->success('متن با موفقیت ثبت شد','متن پیام')->persistent('خیلی خوب');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Motivational $motivational)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Motivational $motivational)
    {
        $motivationals = Motivational::find($motivational);
        return view('admin.motivationals.edit')
            ->with('motivational',$motivational)
            ->with('motivationals',$motivationals);
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motivational $motivational)
    {
        $request['user_id'] = auth()->user()->id;
        $motivational->update($request->all());
        alert()->success('متن با موفقیت ویرایش شد','متن پیام')->persistent('خیلی خوب');
        return redirect('/admin/motivationals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motivational $motivational)
    {
        $motivational->delete();
        alert()->success('متن با موفقیت حذف شد','متن پیام')->persistent('خیلی خوب');
        return back();
    }
}
