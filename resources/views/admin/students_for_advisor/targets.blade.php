@extends('admin.layouts.master')
@section('title','انتخاب برنامه هدف')

@section('content')
<div class="main-content">
    <!-- Basic Form area Start -->
    <div class="container-fluid">
        <!-- Form row -->
        <div class="row">
            <div class="col-12 box-margin height-card">
                <div class="card">
                    <div class="card-body">
                        <?php
                            $name = $student->fname . " " . $student->lname;
                        ?>
                        <h6 class="card-title">انتخاب برنامه هدف - {{ $name }}</h6>
                        <hr>
                            <div class="row">
                                @foreach($targets as $target)
                                    @if($user->id == $target->user_id)
                                        <div class="col-md-6 col-xl-2 box-margin">
                                            <div class="card text-black-50 bg-boxshadow">
                                                <div class="card-header border-bottom-0">{{ $target->title }}</div>
                                                <div class="card-body align-content-center">
                                                    <p class="card-text text-black-50 text-center">
                                                        <b>تاریخ شروع: </b> {{ $target->start_date }} <br>
                                                        <b>تاریخ پایان: </b>{{ $target->end_date }}
                                                    </p>
                                                    <p class="text-center">
<<<<<<< HEAD
                                                        <form action="/admin/plans/students/{{ $student->id }}/target/{{ $target->id }}" method="GET">
=======
                                                        <form action="{{ route('plans.student.target', [$student->id, $target->id]) }}" method="POST">
                                                            @CSRF
                                                           
>>>>>>> bd56452e6c60300393d47529dfc758100a250aff
                                                            <button type="submit" class="btn btn-primary full-width">تنظیم برنامه</button>
                                                        </form>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div><!-- Row -->
                            <a href="/admin/plans/students" class="btn btn-danger">بازگشت به لیست دانش آموزان</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
