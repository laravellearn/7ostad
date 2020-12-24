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
                        <form action="{{ route('students.store') }}" method="POST">
                            @CSRF
                            <div class="row" style="height: 84px">
                                @foreach($targets as $target)
                                    @if($user->id == $target->user_id)
                                        <div class="col-md-6 col-xl-3 height-card box-margin">
                                            <div class="card text-white bg-primary">
                                                <div class="card-header border-bottom-0">{{ $target->title }}</div>
                                                <div class="card-body">
                                                    <p class="card-text text-white">
                                                        تاریخ شروع: {{ $target->start_date }} <br>
                                                        تاریخ پایان: {{ $target->end_date }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div><!-- Row -->
                            <a href="/admin/plans/students" class="btn btn-danger">بازگشت به لیست</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
