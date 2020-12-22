@extends('admin.layouts.master')
@section('title','عملکردها')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 box-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">افزودن عملکرد</h4><hr>
                        <form action="" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label class="control-label">عملکرد*</label>
                                <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary submit">ثبت اطلاعات</button>
                        </form>
                    </div>
                        </div></div>
                    <div class="col-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">عملکردها</h4>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>نام عملکرد</th>
                                        <th>نام مشاور</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($operations as $operation)
                                        <tr>
                                            <td>{{ $operation->name }}</td>
                                            <td>{{ $operation->user->name }}</td>
                                            <td>
                                                @if($operation->status == "1")
                                                    <span class="badge badge-success">فعال</span>
                                                @else
                                                    <span class="badge badge-danger">غیرفعال</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;padding-top: 2px">
                                                <a href="{{ route('operations.edit',['operation'=>$operation->id]) }}" style="margin-top:2px;margin-left:6px">
                                                    <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                                </a>
                                                <form action="{{ route('operations.destroy',['operation'=>$operation->id]) }}" method="POST">
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
