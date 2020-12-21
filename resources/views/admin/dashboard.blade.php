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
                    <!-- Dashboard Info Area -->
                    <div class="col-6">
                        <div class="dashboard-infor-mation d-flex flex-wrap align-items-center mb-3">
                            <div class="dashboard-clock ltr">
                                <span>دوشنبه 15 آبان</span><br>
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li id="hours">12</li>
                                    <li>:</li>
                                    <li id="min">10</li>
                                    <li>:</li>
                                    <li id="sec">14</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Widget -->
                    <div class="col-12 col-sm-6 col-xl-4 height-card box-margin">
                        <div class="card">
                            <div class="card-body py-4">
                                <div class="media align-items-center">
                                    <div class="d-inline-block mr-3">
                                        <i class="icon_cart_alt font-30 text-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-2 font-24">3562</h3>
                                        <div class="mb-0 font-14 font-weight-bold">تعداد دانش آموزان</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="col-12 col-sm-6 col-xl-4 height-card box-margin">
                        <div class="card">
                            <div class="card-body py-4">
                                <div class="media align-items-center">
                                    <div class="d-inline-block mr-3">
                                        <i class="icon_map_alt font-30 text-warning"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-2 font-24">1،869</h3>
                                        <div class="mb-0 font-14 font-weight-bold">بازدید کنندگان امروز</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="col-12 col-sm-6 col-lg-4 height-card box-margin break-992-none break-768-none break-576-none">
                        <div class="card">
                            <div class="card-body py-4">
                                <div class="media align-items-center">
                                    <div class="d-inline-block mr-3">
                                        <i class="icon_cart_alt font-30 text-info"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-2 font-24">13،562</h3>
                                        <div class="mb-0 font-14 font-weight-bold">درآمد کل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">محصول برتر</h5>
                                <div class="product-table-area">
                                    <div class="table-responsive" id="dashboardTable">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>تولید - محصول</th>
                                                <th>کد</th>
                                                <th>حراجی</th>
                                                <th>درآمد</th>
                                                <th style="max-width: 70px">موجودی</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>تلفن تلفن</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2864</td>
                                                <td>81</td>
                                                <td>1،912.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 82%"></div>
                                                        </div>
                                                        <div>
                                                            824
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>ساعت مچی</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3664</td>
                                                <td>26</td>
                                                <td>1،377.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 61%"></div>
                                                        </div>
                                                        <div>
                                                            161
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>عينك آفتابي</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2364</td>
                                                <td>71</td>
                                                <td>9،212.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                        </div>
                                                        <div>
                                                            123
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>ساعت مچی</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>25664</td>
                                                <td>79</td>
                                                <td>1،298.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                        </div>
                                                        <div>
                                                            254
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>تلفن تلفن</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>9564</td>
                                                <td>26</td>
                                                <td>1،377.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 61%"></div>
                                                        </div>
                                                        <div>
                                                            61
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>ساعت مچی</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7864</td>
                                                <td>71</td>
                                                <td>9،212.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                        </div>
                                                        <div>
                                                            145
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>عينك آفتابي</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1564</td>
                                                <td>60</td>
                                                <td>7،376.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 76%"></div>
                                                        </div>
                                                        <div>
                                                            176
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-3">
                        <div class="card bg-boxshadow full-height">
                            <div class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0">کاربران جدید</h5>
                                <!-- Nav Tabs -->
                                <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link show" id="today-users-tab" data-toggle="tab" href="#today-users" role="tab" aria-controls="today-users" aria-selected="false">امروز</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mr-0 active" id="month-users-tab" data-toggle="tab" href="#month-users" role="tab" aria-controls="month-users" aria-selected="true">ماه</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="userList2">
                                    <div class="tab-pane fade" id="today-users" role="tabpanel" aria-labelledby="today-users-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-2.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نام کاربر</h6>
                                                        <p class="mb-0">طراح محصول</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-3.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">دیسک نیلی</h6>
                                                        <p class="mb-0">توسعه دهنده وب</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">ویلتور دلتون</h6>
                                                        <p class="mb-0">مدیر پروژه</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-5.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نیک استون</h6>
                                                        <p class="mb-0">طراح ویژوال</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-7.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">ویلتور دلتون</h6>
                                                        <p class="mb-0">مدیر پروژه</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade active show" id="month-users" role="tabpanel" aria-labelledby="month-users-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/2.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">ویلتور دلتون</h6>
                                                        <p class="mb-0">مدیر پروژه</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/3.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نام کاربر</h6>
                                                        <p class="mb-0">طراح محصول</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/4.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">دیسک نیلی</h6>
                                                        <p class="mb-0">توسعه دهنده وب</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/1.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نظرالاسلام</h6>
                                                        <p class="mb-0">طراح ویژوال</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/5.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نیک استون</h6>
                                                        <p class="mb-0">طراح ویژوال</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
