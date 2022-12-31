@extends('layouts/admin')
@push('select2')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush
@section('content')
    @if(Session::has('message'))
        <p class="alert alert-info" style="font-size: larger;font-weight: bolder;background: #409aff;color:#fff">{{ Session::get('message') }}</p>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Car</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{url('admin/cars/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="row">
            <div class=" col-md-12">
                <div class="form-group">
                    <label for="make">Make</label>
                    <select class="form-control select2 select2-danger" id="make" name="make" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
                        @foreach($makes as $make)
                        <option  value="{{$make->id}}">{{$make->make}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Model</label>
                    <select class="form-control " id="model" name="model"  style="width: 100%;" required>
                        @foreach($models as $model)
                            <option  value="{{$model->id}}">{{$model->model}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" required>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" class="form-control" id="year" name="year" placeholder="Enter Year" required>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Rent/Sell</label>
                    <select class="form-control " id="rent_sell" name="rent_sell"  style="width: 100%;" required>
                        <option  value="1">Rent</option>
                        <option  value="2">Sell</option>
                    </select>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Auto/Manual</label>
                    <select class="form-control " id="auto" name="auto"  style="width: 100%;" required>
                        <option  value="1">Auto</option>
                        <option  value="2">Manual</option>
                    </select>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Body Type</label>
                    <select class="form-control " id="body_type" name="body_type"  style="width: 100%;" required>
                        <option  value="1">SUV</option>
                        <option  value="2">Sport</option>
                        <option  value="3">Family</option>
                        <option  value="4">Sedan</option>
                    </select>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                     <label for="customFile">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image" required>
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
@push('select2script')
    <!-- Select2 -->
    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script>
@endpush
