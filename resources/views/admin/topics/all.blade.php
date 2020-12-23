@extends('admin.layouts.master')
@section('title','مباحث')
@section('style')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/default-assets/select2.min.js"></script>
    <link rel="stylesheet" href="/css/default-assets/select2.min.css">

    <script>
        $(document).ready(function() {
            $('.my_select').select2();
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
                            <h4 class="card-title mb-2">افزودن مبحث</h4>
                            <hr>
                            <form action="{{route('topics.store')}}" method="POST">
                                @CSRF
                                <div class="form-group">
                                    <label class="control-label">رشته تحصیلی-پایه تحصیلی-گروه درسی-کتاب*</label>
                                    <select class="form-control form-control-sm mb-3 my_select" name="book_id">
                                        @foreach($books as $book)
                                            <option value="{{ $book->id }}">
                                                <?php
                                                    echo
                                                        $book->lessongroup->grade->study->name ." -> ".
                                                        $book->lessongroup->grade->name ." -> ".
                                                        $book->lessongroup->name ." -> ".
                                                        $book->name;
                                                ?>
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label"> نام مبحث*</label>
                                    <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary submit">ثبت اطلاعات</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">مباحث</h4>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>رشته تحصیلی</th>
                                        <th>پایه تحصیلی </th>
                                        <th>گروه درسی</th>
                                        <th> نام کتاب</th>
                                        <th>مبحث</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        @foreach($topics as $topic)
                                            <td>{{ $topic->book->lessongroup->grade->study->name }}</td>
                                            <td>{{ $topic->book->lessongroup->grade->name }}</td>
                                            <td>{{$topic->book->lessongroup->name}}</td>
                                            <td>{{$topic->book->name}}</td>
                                            <td>{{$topic->name}}</td>
                                            <td>
                                                @if($topic->status == "1")
                                                    <span class="badge badge-success">فعال</span>
                                                @else
                                                    <span class="badge badge-danger badge-md">فعال</span>
                                                @endif
                                            </td>

                                            <td style="text-align: center;padding-top: 2px">
                                                <a href="{{route('topics.edit', $topic->id)}}" style="margin-top:2px;margin-left:6px">
                                                    <i class="fa fa-edit" style="font-size:17px;color:green"></i>
                                                </a>
                                                <form action="{{ route('topics.destroy',['topic'=>$topic->id]) }}" method="POST">
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
