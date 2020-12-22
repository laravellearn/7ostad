@extends('admin.layouts.master')
@section('title','گروه درسی')
@section('content')


<!-- Main Content Area -->
<div class="main-content">
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">افزودن گروه درسی</h4>
                            <hr>
                            <form action=""  method="POST">
                                @CSRF
                                <div class="form-group">
                                    <label class="control-label">رشته تحصیلی*</label>
                                    <select class="form-control form-control-sm mb-3" name="study_id">
                                        @foreach($studies as $study)
                                            <option value="{{ $study->id }}">{{ $study->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">پایه تحصیلی*</label>
                                    <select class="form-control form-control-sm mb-3" name="grade_id">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">گروه درسی*</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary submit">ثبت اطلاعات</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">گروه های درسی</h4>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>رشته تحصیلی</th>
                                        <th>پایه تحصیلی</th>
                                        <th>گروه درسی</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        @foreach($lessongroups as $lessongroup)
                                            <td>{{ $lessongroup->grade->study->name }}</td>
                                            <td>{{ $lessongroup->grade->name }}</td>
                                            <td>{{ $lessongroup->name }}</td>
                                            <td>
                                                @if($lessongroup->status == 1)
                                                    <span class="badge badge-success">فعال</span>
                                                @else
                                                    <span class="badge badge-danger">غیر فعال</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;padding-top: 2px">
                                                    <a href="{{ route('lessongroups.edit',['lessongroup'=>$lessongroup->id]) }}" style="margin-top:2px;margin-left:6px">
                                                        <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                                    </a>
                                                    <form action="/admin/lessongroups/{{ $lessongroup->id }}" method="POST">
                                                        @CSRF
                                                        @method('delete')
                                                        <button type="submit" onclick="return confirm('آيا براي حذف این رکورد مطمئن هستيد؟')" class="fa fa-remove" style="font-size:20px;color:red;border: none"></button>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="study_id"]').on('change', function() {
            var study_id = $(this).val();
            if (study_id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('/lessongroups/')}}/" + study_id,
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        var d = $('select[name="grade_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="grade_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>
@endsection
