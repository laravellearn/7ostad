@extends('admin.layouts.master')
@section('title','لیست دانش آموزان')
@section('content')
<!-- Main Content Area -->
<div class="main-content">
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">لیست دانش آموزان</h4>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>نام</th>
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
                                        <td>{{ $student->name }}</td>
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
                                            <a href="/admin/students/{{ $student->id }}/edit">
                                                <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                            </a>
                                            <form action="/admin/students/{{ $student->id }}" method="POST">
                                                @CSRF
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('آيا براي حذف این رکورد مطمئن هستيد؟')" class="fa fa-remove " style="font-size:20px;color:red;border: none">
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
