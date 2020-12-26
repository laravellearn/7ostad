@extends('admin.layouts.master')
@section('title','داشبورد')
@section('content')
    <div class="main-content">
        <div class="dashboard-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="dashboard-header-title mb-3">
                            <h5 class="mb-0 font-weight-bold">داشبورد</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <?php $user = \Illuminate\Support\Facades\Auth::user(); ?>
                                @if($user->user_type = 'admin')
                                    <h5 class="card-title">آخرین دانش آموزان ثبت نام شده</h5>
                                @else
                                    <h5 class="card-title">آخرین دانش آموزان شما</h5>
                                @endif
                                <div class="product-table-area">
                                    <div class="table-responsive" id="dashboardTable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>نام خانوادگی</th>
                                                    <th>جنسیت</th>
                                                    <th>موبایل</th>
                                                    <th>پایه تحصیلی</th>
                                                    <th>رشته تحصیلی</th>
                                                    <th>مشاور</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td>{{ $student->fname }}</td>
                                                        <td>{{ $student->lname }}</td>
                                                        <td>
                                                            @if($student->gender == "man")
                                                                پسر
                                                            @else
                                                                دختر
                                                            @endif
                                                        </td>
                                                        <td>{{ $student->mobile }}</td>
                                                        <td>{{ $student->grade->name }}</td>
                                                        <td>{{ $student->study->name }}</td>
                                                        <td>{{ $student->user->name }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="col-md-6 col-xl-4 mb-3">--}}
{{--                        <div class="card bg-boxshadow full-height">--}}
{{--                            <div class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">--}}
{{--                                <h5 class="card-title mb-0">کاربران جدید</h5>--}}
{{--                                <!-- Nav Tabs -->--}}
{{--                                <ul class="nav total-earnings nav-tabs mb-0" role="tablist">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link show" id="today-users-tab" data-toggle="tab" href="#today-users" role="tab" aria-controls="today-users" aria-selected="false">امروز</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link mr-0 active" id="month-users-tab" data-toggle="tab" href="#month-users" role="tab" aria-controls="month-users" aria-selected="true">ماه</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

{{--                            <div class="card-body">--}}
{{--                                <div class="tab-content" id="userList2">--}}
{{--                                    <div class="tab-pane fade" id="today-users" role="tabpanel" aria-labelledby="today-users-tab">--}}
{{--                                        <ul class="total-earnings-list">--}}
{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/team-2.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">نام کاربر</h6>--}}
{{--                                                        <p class="mb-0">طراح محصول</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/team-3.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">دیسک نیلی</h6>--}}
{{--                                                        <p class="mb-0">توسعه دهنده وب</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/team-4.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">ویلتور دلتون</h6>--}}
{{--                                                        <p class="mb-0">مدیر پروژه</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/team-5.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">نیک استون</h6>--}}
{{--                                                        <p class="mb-0">طراح ویژوال</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/team-7.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">ویلتور دلتون</h6>--}}
{{--                                                        <p class="mb-0">مدیر پروژه</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}

{{--                                    <div class="tab-pane fade active show" id="month-users" role="tabpanel" aria-labelledby="month-users-tab">--}}
{{--                                        <ul class="total-earnings-list">--}}
{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/2.png" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">ویلتور دلتون</h6>--}}
{{--                                                        <p class="mb-0">مدیر پروژه</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/3.png" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">نام کاربر</h6>--}}
{{--                                                        <p class="mb-0">طراح محصول</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/4.png" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">دیسک نیلی</h6>--}}
{{--                                                        <p class="mb-0">توسعه دهنده وب</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/1.png" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">نظرالاسلام</h6>--}}
{{--                                                        <p class="mb-0">طراح ویژوال</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <div class="author-info d-flex align-items-center">--}}
{{--                                                    <div class="author-img mr-3">--}}
{{--                                                        <img src="img/member-img/5.png" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="author-text">--}}
{{--                                                        <h6 class="mb-0">نیک استون</h6>--}}
{{--                                                        <p class="mb-0">طراح ویژوال</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a href="#" class="badge badge-primary">دنبال کردن</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

            </div>
        </div>
    </div>
@endsection
