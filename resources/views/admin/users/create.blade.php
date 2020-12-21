@extends('admin.layouts.master')
@section('title','ثبت کاربر جدید')
@section('style')
    <link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">
    <script src="/js/jquery.min.js"></script>
    <style>
        .pdp-default{
            left: 25%!important;
        }
    </style>

@endsection

@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-12 box-margin height-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">ثبت کاربر</h6><hr>
                            <form action="{{ route('users.store') }}" method="POST">
                                @if($errors->any())
                                    <ul class="alert alert-danger" role="alert">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @CSRF
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>نوع کاربر</label>
                                            <select class="form-control form-control-sm mb-3" name="user_type">
                                                <option value="advisor">مشاور</option>
                                                <option value="admin">مدیر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">پست الکترونیکی*</label>
                                            <input id="email" name="email" value="{{ old('email') }}" type="email" class="form-control" required autocomplete="email">
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword11">کلمه عبور*</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword12">تکرار کلمه عبور*</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div><!-- Row -->
                                <div class="row" style="height: 84px">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">نام و نام خانوادگی*</label>
                                            <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">کدملی*</label>
                                            <input type="number" class="form-control" value="{{ old('national_code') }}" required name="national_code">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group mb-50">
                                            <label>تاریخ تولد</label>
                                            <input type="text" name="birthdate" value="{{ old('birthdate') }}"  class="form-control usage">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <label class="control-label">جنسیت*</label>
                                        <div class="mt-3 form-group" style="margin-top: 0.3rem!important">
                                            <div class="custom-control custom-radio" style="float: right">
                                                <input type="radio" id="customRadio1" value="man" {{ old('gender') }} name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">آقا</label>
                                            </div>
                                            <div class="custom-control custom-radio" style="padding-right: 2.5rem;float: right">
                                                <input type="radio" id="customRadio2" value="woman" {{ old('gender') }} name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">خانم</label>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">شماره موبایل*</label>
                                            <input type="number" name="mobile" value="{{ old('mobile') }}" required class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">تلفن ثابت</label>
                                            <input type="number" class="form-control" value="{{ old('phone') }}" name="phone">
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">آدرس منزل</label>
                                            <input type="text" name="address" value="{{ old('address') }}" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="form-group">
                                    <label class="col-form-label">توضیحات</label>
                                    <textarea id="maxlength-textarea" name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary submit">ثبت اطلاعات</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

