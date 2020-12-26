@extends('admin.layouts.master')
@section('title','ویرایش پایه تحصیلی')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 box-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">ویرایش پایه تحصیلی</h4><hr>
                        <form action="/admin/grades/{{ $grade->id }}" method="POST">
                            @CSRF
                            @method('patch')
                            <div class="form-group">
                                <label class="control-label">پایه تحصیلی*</label>
                                <select class="form-control form-control-sm mb-3" name="study_id">
                                    @foreach($studies as $study)
                                        <option value="{{ $study->id }}" {{ $grade->study_id==$study->id ? 'selected' :'' }}>{{ $study->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">رشته تحصیلی*</label>
                                <input type="text" name="name" value="{{ $grade->name }}" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary submit">ویرایش اطلاعات</button>
                        </form>
                    </div>
                        </div></div>
                    <div class="col-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">پایه های تحصیلی</h4>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>رشته تحصیلی</th>
                                        <th>پایه تحصیلی</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($grades as $grade)
                                        <tr>
                                            <td>{{ $grade->name }}</td>
                                            <td>
                                                {{ $grade->study->name }}
                                            </td>
                                            <td style="text-align: center;padding-top: 2px" class="d-flex">
                                                <a href="/admin/grades/{{ $grade->id }}/edit" style="margin-top:2px;margin-left:6px">
                                                    <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                                </a>
                                                <form action="/admin/grades/{{ $grade->id }}" method="POST">
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
