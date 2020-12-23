@extends('admin.layouts.master')
@section('title','سخنان')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">ویرایش سخنان</h4><hr>
                        <form action="{{ route('motivationals.update',['motivational'=>$motivational->id]) }}" method="POST">
                            @CSRF
                            @method('PATCH')
                            <div class="form-group">
                                <label class="control-label">سخنان*</label>
                                <input type="text" name="body" value="{{ $motivational->body }}" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary submit">ویرایش اطلاعات</button>
                        </form>
                    </div>
                        </div></div>
                
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
