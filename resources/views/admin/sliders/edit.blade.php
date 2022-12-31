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
        <h3 class="card-title">Edit Slider</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{url('admin/sliders/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="row">

            <div class=" col-md-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$slider->title}}" placeholder="" required>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Title(French)</label>
                    <input type="text" class="form-control" id="title_fr" name="title_fr" value="{{$slider->title_fr}}" placeholder="" required>
                </div>
            </div>
            <input name="slider_id" value="{{$slider->id}}" type="hidden" >
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" class="form-control" id="details" name="details" value="{{$slider->details}}" placeholder="" >
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group">
                    <label>Sub Title(French)</label>
                    <input type="text" class="form-control" id="details_fr" name="details_fr" value="{{$slider->details_fr}}" placeholder="" >
                </div>
            </div>

            <div class=" col-md-12">
                <div class="form-group">
                     <label for="customFile">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image" >
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection

