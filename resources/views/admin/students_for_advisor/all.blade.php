@extends('admin.layouts.master')
@section('title','لیست دانش آموزان من')
@section('content')
<!-- Main Content Area -->
<div class="main-content">
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">لیست دانش آموزان من</h4>
                            <hr>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>شناسه</th>
                                    <th>نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>جنسیت</th>
                                    <th>کدملی</th>
                                    <th>موبایل</th>
                                    <th>رشته تحصیلی</th>
                                    <th>پایه تحصیلی</th>
                                    <th>مشاور</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->stid }}</td>
                                        <td>{{ $student->fname }}</td>
                                        <td>{{ $student->lname }}</td>
                                        <td>
                                            @if($student->gender == "man")
                                                پسر
                                            @else
                                                دختر
                                            @endif
                                        </td>
                                        <td>{{ $student->national_code }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->study->name }}</td>
                                        <td>{{ $student->grade->name }}</td>
                                        <td>{{ $student->user->name }}</td>
                                        <td style="text-align: center" class="d-flex">
                                            <a href="/admin/plans/student/{{ $student->id }}" style="margin-top:2px;margin-left:6px">
                                                <i class="fa fa-eye" style="font-size:17px;color:green"></i>
                                            </a>
                                            <form action="/admin/plans/targets/{{ $student->id }}" method="POST">
                                                @CSRF
                                                <button type="submit" class="fa fa-table " style="font-size:20px;color:steelblue;border: none">
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
    </div>
</div>
@endsection
