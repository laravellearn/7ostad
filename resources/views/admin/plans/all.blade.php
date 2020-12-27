@extends('admin.layouts.master')
@section('title','جدول برنامه ریزی دانش آموز')
@section('style')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/default-assets/select2.min.js"></script>
    <link rel="stylesheet" href="/css/default-assets/select2.min.css">

    <script>
        $(document).ready(function() {
            $('.my_select1').select2();
            $('.my_select2').select2();
            $('.my_select3').select2();
            $('.my_select4').select2();
            $('.my_select5').select2();
            $('.my_select6').select2();
            $('.my_select7').select2();
            $('.my_select8').select2();
            $('.my_select9').select2();
            $('.my_select10').select2();
            $('.my_select11').select2();
            $('.my_select12').select2();
            $('.my_select13').select2();
            $('.my_select14').select2();
            $('.my_select15').select2();
            $('.my_select16').select2();
        });
    </script>
@endsection

@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
    <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="table-">
                        <div class="card-body">
                            <div class="edit-table-area">
                                <h4 class="card-title">جداول برنامه ریزی</h4>
                                <div class="table-responsive">
                                    <table id="basicTableId" class="table table-bordered table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td rowspan="4" style="text-align: center;vertical-align: inherit">
                                                    شنبه
                                                </td>
                                            </tr>
                                            <tr>
                                                @for($i=1;$i<=8;$i++)
                                                    <td>
                                                        <select class="form-control form-control-sm mb-3 my_select{{ $i }}" name="operation_id">
                                                            @foreach($operations as $operation)
{{--                                                                <option value="{{ $operation->id }}">{{ $user->operation->name }}</option>--}}
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                @for($i=9;$i<=16;$i++)
                                                    <td>
                                                        <select class="form-control form-control-sm mb-3 my_select{{ $i }}" name="book_id">
                                                            @foreach($subtargets as $subtarget)
{{--                                                                <option value="">{{ $target->subtarget->book->name }}</option>--}}
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                                <td>لورم ایپسوم متن ساختگی </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
