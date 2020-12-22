@extends('admin.layouts.master')
@section('title','لیست کاربران')
@section('content')
<!-- Main Content Area -->
<div class="main-content">
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">لیست کاربران</h4>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>نام</th>
                                    <th>جنسیت</th>
                                    <th>کدملی</th>
                                    <th>ایمیل</th>
                                    <th>شماره تلفن</th>
                                    <th>سطح دسترسی</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            @if($user->gender == "man")
                                                آقا
                                            @else
                                                خانم
                                            @endif
                                        </td>
                                        <td>{{ $user->national_code }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        <td style="text-align: center">
                                            @if($user->user_type == "admin")
                                                مدیر
                                            @else
                                                مشاور
                                            @endif
                                        </td>
                                        <td style="text-align: center;padding-top: 2px">
                                            <a href="/admin/users/{{ $user->id }}/edit" style="margin-top:2px;margin-left:6px">
                                                <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                            </a>
                                            <form action="/admin/users/{{ $user->id }}" method="POST">
                                                @CSRF
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('آيا براي حذف این رکورد مطمئن هستيد؟')" class="fa fa-remove" style="font-size:20px;color:red;border: none">
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
