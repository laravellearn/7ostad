@extends('admin.layouts.master')
@section('title','برنامه هدف')
@section('style')
    <link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">
    <script src="/js/jquery.min.js"></script>
    <style>
        .pdp-default{
            left: 65%!important;
        }
    </style>
@endsection

@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 box-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">افزودن برنامه هدف</h4><hr>
                        <form action="{{ route('targets.store') }}" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label class="control-label">نام برنامه*</label>
                                <input type="text" name="title" value="{{ old('title') }}" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>تاریخ شروع</label>
                                <input type="text" {{ old('start_date') }} name="start_date" required  class="form-control usage">
                            </div>
                            <div class="form-group">
                                <label>تاریخ پایان</label>
                                <input type="text" {{ old('end_date') }} name="end_date" required  class="form-control usage">
                            </div>

                            <button type="submit" class="btn btn-primary submit">ثبت اطلاعات</button>
                        </form>
                    </div>
                        </div></div>
                    <div class="col-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">برنامه های هدف</h4>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>نام برنامه</th>
                                            <th>تاریخ شروع</th>
                                            <th>تاریخ پایان</th>
                                            <th>وضعیت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($targets as $target)
                                        <tr>
                                            <td>{{ $target->title }}</td>
                                            <td>{{ $target->start_date }}</td>
                                            <td>{{ $target->end_date }}</td>
                                            <td>
                                                @if($target->status == "1")
                                                    <span class="badge badge-success">فعال</span>
                                                @else
                                                    <span class="badge badge-danger">غیرفعال</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;padding-top: 2px">
                                                <a href="{{ route('targets.edit',['target'=>$target->id]) }}">
                                                    <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                                </a>
                                                <form action="{{ route('targets.destroy',['target'=>$target->id]) }}" method="POST">
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
