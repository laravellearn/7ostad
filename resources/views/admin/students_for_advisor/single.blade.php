@extends('admin.layouts.master')
<?php $name = $student->fname." ".$student->lname ?>
@section('title',$name)

@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-12 box-margin height-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">مشاهده اطلاعات: {{ $name }}</h6><hr>
                                <div class="row" style="height: 84px">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">نام *</label>
                                            <input type="text" name="fname" value="{{ $student->fname }}" class="form-control" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">نام خانوادگی *</label>
                                            <input type="text" name="lname" value="{{ $student->lname }}" class="form-control" disabled>
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-3">
                                        <div class="form-group mb-50">
                                            <label>تاریخ تولد</label>

                                            <input type="text" value="{{ $student->birthdate }}" name="birthdate"  class="form-control usage" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <label class="control-label">جنسیت*</label>
                                        <div class="mt-3 form-group" style="margin-top: 0.3rem!important">
                                            <div class="custom-control custom-radio" style="float: right">
                                                <input type="radio" id="customRadio1" value="man" {{ ($student->gender == "man") ? 'checked' : '' }} name="gender" class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadio1">پسر</label>
                                            </div>
                                            <div class="custom-control custom-radio" style="padding-right: 2.5rem;float: right">
                                                <input type="radio" id="customRadio2" value="woman"  {{ ($student->gender == "woman") ? 'checked' : '' }} name="gender" class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadio2">دختر</label>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- Row -->
                                <div class="row" style="height: 84px">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">شماره موبایل</label>
                                            <input type="text" value="{{ $student->mobile }}" name="mobile" class="form-control" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">تلفن ثابت</label>
                                            <input type="text" value="{{ $student->phone }}" class="form-control" name="phone" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">کدملی*</label>
                                            <input type="text" class="form-control" value="{{ $student->national_code }}" name="national_code" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>انتخاب مشاور</label>
                                            <select name="user_id" class="form-control form-control-sm mb-3 my_select" disabled>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}"{{ ($student->user->id == $user->id) ? 'selected' : '' }}>{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>رشته تحصیلی</label>
                                            <select name="study_id" class="form-control form-control-sm mb-3" disabled>
                                                @foreach($studies as $study)
                                                    <option value="{{ $study->id }}" {{ ($student->study->id == $study->id) ? 'selected' : '' }}>{{ $study->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>پایه تحصیلی</label>
                                            <select name="grade_id" class="form-control form-control-sm mb-3" disabled>
                                                @foreach($grades as $grade)
                                                    <option value="{{ $grade->id }}" {{ ($student->grade->id == $grade->id) ? 'selected' : '' }}>{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">مدرسه محل تحصیل</label>
                                            <input type="text" name="school" value="{{ $student->school }}" class="form-control" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">کد پستی</label>
                                            <input type="text" name="zipcode" value="{{ $student->zipcode }}" class="form-control" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">آدرس منزل</label>
                                            <input type="text" name="address" value="{{ $student->address }}" class="form-control" disabled>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="form-group">
                                    <label class="col-form-label">توضیحات</label>
                                    <textarea id="maxlength-textarea" name="description" class="form-control" rows="3" disabled>{{ $student->description }}</textarea>
                                </div>
                            <a href="/admin/plans/students" class="btn btn-danger">بازگشت به لیست</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
