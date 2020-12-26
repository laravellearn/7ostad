<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Study;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students.all',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::WHERE('user_type','advisor')->get();
        $grades = Grade::all();
        $studies = Study::all();
        return view('admin.students.create')
            ->with('users',$users)
            ->with('grades',$grades)
            ->with('studies',$studies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'grade_id' => 'numeric|required',
            'study_id' => 'numeric|required',
            'user_id' => 'numeric|required',
            'fname' => ['required', 'max:110'],
            'lname' => ['required', 'max:255'],
            'email' => ['email', 'max:255', 'unique:students','nullable'],
            'national_code' => 'min:10|max:12|required',
            'birthdate' => 'max:10|required',
            'address' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
            'gender' => 'required',
            'school' => 'nullable',
            'zipcode' => 'nullable',
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'phone' => 'numeric|digits:11|nullable',
            'status' => 'boolean'
        ]);
        $request['stid'] = rand(11111111,99999999);
        Student::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','متن پیام');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $users = User::WHERE('status',1)->get();
        $studies = Study::all();
        $grades = Grade::all();
        return view('admin.students.edit')
            ->with('student',$student)
            ->with('users',$users)
            ->with('studies',$studies)
            ->with('grades',$grades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'grade_id' => 'numeric|required',
            'study_id' => 'numeric|required',
            'user_id' => 'numeric|required',
            'fname' => ['required', 'max:110'],
            'lname' => ['required', 'max:255'],
            'email' => ['email', 'max:255', 'unique:students','nullable'],
            'national_code' => 'min:10|max:12|required',
            'birthdate' => 'max:10|required',
            'address' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
            'gender' => 'required',
            'school' => 'nullable',
            'zipcode' => 'nullable',
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'phone' => 'numeric|digits:11|nullable',
            'status' => 'boolean'
        ]);
        $student->update($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','متن پیام');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        alert()->success('دانش آموز موردنظر با موفقیت حذف گردید','متن پیام');
        return back();
    }

    public function getGrade($study_id)
    {
        $grd = Grade::where('study_id', '=', $study_id)->get();
        return json_encode($grd);
    }
}
