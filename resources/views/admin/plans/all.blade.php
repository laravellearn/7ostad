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
            $('.my_select17').select2();
            $('.my_select18').select2();
            $('.my_select19').select2();
            $('.my_select20').select2();
            $('.my_select21').select2();
            $('.my_select22').select2();
            $('.my_select23').select2();
            $('.my_select24').select2();
        });
    </script>
    <style>
        .table td, .table th {
            padding: 7px 2px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered
        ,.select2-results__option[aria-selected]{
            font-size: 13px!important;
        }
    </style>
@endsection

@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xl-12 height-card box-margin">
                    <div class="card">
                        <div class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">جدول برنامه ریزی</h5>
                            <!-- Nav Tabs -->
                            <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link show active" id="week1" data-toggle="tab" href="#week1" role="tab" aria-controls="week1" aria-selected="true">هفته اول</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content pt-0" id="userList2">
                                <div class="tab-pane fade active show" id="week1" role="tabpanel" aria-labelledby="week1">
                                    <div class="table-responsive">
                                        <table id="basicTableId" class="table table-bordered mb-0">
                                            <tbody>
                                                @for($j=1;$j<=7;$j++)
                                                    <tr>
                                                        <td rowspan="4" style="text-align: center;vertical-align: inherit;border-bottom: 3px solid #ccc">
                                                            @switch($j)
                                                                @case(1)
                                                                    شنبه
                                                                    @break($j)
                                                                @case("2")
                                                                    یکشنبه
                                                                    @break($j)
                                                                @case("3")
                                                                    دوشنبه
                                                                    @break($j)
                                                                @case("4")
                                                                    سه شنبه
                                                                    @break($j)
                                                                @case("5")
                                                                    چهارشنبه
                                                                    @break($j)
                                                                @case("6")
                                                                    پنجشنبه
                                                                    @break($j)
                                                                @case("7")
                                                                    جمعه
                                                                    @break($j)
                                                            @endswitch
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        @for($i=1;$i<=8;$i++)
                                                            <td>
                                                                <select style="width: 100%" class="form-control form-control-sm mb-3 my_select{{ $i }}" name="operation_id{{ $i }}">
                                                                    <option value="0">--بدون انتخاب--</option>
                                                                    @foreach($operations as $operation)
                                                                        <option value="{{ $operation->id }}">{{ $operation->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                    <tr>
                                                        @for($i=1;$i<=8;$i++)
                                                            <td>
                                                                <select style="width: 100%" class="form-control form-control-sm mb-3 my_select{{ $i }}" name="book_id{{ $i }}">
                                                                <option value="0">--بدون انتخاب--</option>
                                                                @foreach($subtargets as $subtarget)
                                                                        <option value="{{ $subtarget->book->id }}">{{$subtarget->book->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                    <tr style="border-bottom: 3px solid #ccc">
                                                        @for($i=1;$i<=8;$i++)
                                                            <td>
                                                                <select style="width: 100%" class="form-control form-control-sm mb-3 my_select{{ $i }}" name="topic_id{{ $i }}">
                                                                <option value="0">--بدون انتخاب--</option>
                                                                @foreach($topics as $topic)
                                                                        <option value="{{ $topic->id }}">{{$topic->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="submit" class="btn btn-success pull-left m-4">ثبت اطلاعات</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var i=1;
            for (i=1;i<=8;i++) {
                $('select[name="book_id"]').on('change', function () {
                    var book_id = $(this).val();
                    if (book_id) {
                        $.ajax({
                            type: "GET",
                            url: "{{url('/plans/')}}/" + book_id,
                            dataType: "json",
                            success: function (data) {
                                console.log(data);
                                var d = $('select[name="topic_id"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="topic_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });
            }
        });
    </script>

@endsection
