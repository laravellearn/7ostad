<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Grade;
use App\Models\Operation;
use App\Models\Plan;
use App\Models\Student;
use App\Models\Study;
use App\Models\Subtarget;
use App\Models\Target;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }

    public function getStudents()
    {
        $user = Auth::user();
        if ($user->user_type != 'admin'){
            $students = Student::WHERE('user_id','=',$user->id)->get();
        }else{
            $students = Student::all();
        }
        return view('admin.students_for_advisor.all',compact('students'));
    }

    public function getStudent(request $request,student $student)
    {
        $user = Auth::user();
        if ($student->user_id == $user->id || $user->user_type == 'admin') {
            $users = User::all();
            $studies = Study::all();
            $grades = Grade::all();
            return view('admin.students_for_advisor.single', compact('student'))
                ->with('users', $users)
                ->with('studies', $studies)
                ->with('grades', $grades);
        }else{
            return redirect('/admin/plans/students');
        }
    }

    public function getTargets(request $request,student $student)
    {
        $user = Auth::user();
        $targets = Target::all();
        if ($student->user_id == $user->id || $user->user_type == 'admin') {
            return view('admin.students_for_advisor.targets')
                ->with('student', $student)
                ->with('user', $user)
                ->with('targets', $targets);
        }else{
            return redirect('/admin/plans/students');
        }
    }

    public function getPlansTable(student $student, target $target)
    {

        $user = Auth::user()->id;
        $operations = Operation::with('user')->where('user_id', $user)->get();
        $books = Book::with('subtargets')->get();
        $topics = Topic::with('book')->get();
        $subtargets = Subtarget::with('book')->select('book_id')
            ->groupBy('book_id')->get();

        return view('admin.plans.all')
            ->with('student',$student)
            ->with('target',$target)
            ->with('operations',$operations)
            ->with('books',$books)
            ->with('subtargets',$subtargets)
            ->with('topics',$topics)
            ->with('user',$user);
    }

    public function getTopic($book_id)
    {
        $tpc = Topic::where('book_id', '=', $book_id)->get();
        return json_encode($tpc);
    }
}
