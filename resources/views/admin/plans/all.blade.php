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
                                                             <option value="{{ $operation->id }}">{{ $operation->name }}</option>
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
                                                          <option value="{{ $subtarget->id }}">{{$subtarget->book->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <!-- @for($i=10;$i<=17;$i++) -->
                                                    <td>
                                                        <select class="form-control form-control-sm mb-3 my_select{{ $i }}" name="topic_id">
                                                       
                                                        </select>
                                                    </td>
                                                <!-- @endfor -->
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary pull-left m-4">ارسال اطلاعات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('select[name="book_id"]').on('change', function() {
            var book_id = $(this).val();
            alert(book_id);
            if (book_id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('plans/students/')}}/" + book_id,
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