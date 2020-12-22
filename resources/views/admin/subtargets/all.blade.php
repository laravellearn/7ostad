@extends('admin.layouts.master')
@section('title','افزودن درس به برنامه هدف')
@section('style')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/default-assets/select2.min.js"></script>
    <link rel="stylesheet" href="/css/default-assets/select2.min.css">
    <script>
        $(document).ready(function() {
            $('.my_select1').select2();
            $('.my_select2').select2();
            $('.my_select3').select2();
        });
    </script>
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
                            <h4 class="card-title mb-2">افزودن درس به برنامه هدف</h4><hr>
                        <form action="{{ route('subtargets.store') }}" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label class="control-label">انتخاب برنامه هدف*</label>
                                <select name="target_id" class="form-control form-control-sm mb-3 my_select1" required>
                                    @foreach($targets as $target)
                                        <option value="{{ $target->id }}">{{ $target->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">انتخاب کتاب*</label>
                                <select name="book_id" class="form-control form-control-sm mb-3 my_select2" required>
                                    @foreach($books as $book)
                                        <option value="{{ $book->id }}">{{ $book->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">انتخاب مبحث*</label>
                                <select name="topic_id" class="form-control form-control-sm mb-3 my_select3" required>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary submit">ثبت اطلاعات</button>
                        </form>
                    </div>
                        </div></div>
                    <div class="col-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">دروس مربوط به برنامه های هدف</h4>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>برنامه هدف</th>
                                            <th>کتاب</th>
                                            <th>مبحث</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($subtargets as $subtarget)
                                        <tr>
                                            <td>{{ $subtarget->target->title }}</td>
                                            <td>{{ $subtarget->book->name }}</td>
                                            <td>{{ $subtarget->topic->name }}</td>
                                            <td style="text-align: center;padding-top: 2px">
                                                <a href="{{ route('subtargets.edit',['subtarget'=>$subtarget->id]) }}" style="margin-top:2px;margin-left:6px">
                                                    <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                                </a>
                                                <form action="{{ route('subtargets.destroy',['subtarget'=>$subtarget->id]) }}" method="POST">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="book_id"]').on('change', function() {
                var book_id = $(this).val();
                if (book_id) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('/subtargets/')}}/" + book_id,
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            var d = $('select[name="topic_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="topic_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
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
