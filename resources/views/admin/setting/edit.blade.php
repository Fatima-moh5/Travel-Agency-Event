@extends('layouts/admin')

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
        <h3 class="card-title">Configurations</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{url('admin/setting/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" type="text"  name="phone" value="{{$setting->phone}}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input class="form-control" type="text"  name="address" value="{{$setting->address}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email"  name="email" value="{{$setting->email}}">
            </div>
            <div class="form-group">
                <label>Logo</label>
                <input class="form-control" type="file"  name="logo" >
            </div>
            <div class="form-group">
                <label>Facebook</label>
                <input class="form-control" type="text"  name="facebook" value="{{$setting->facebook}}">
            </div>
            <div class="form-group">
                <label>Instagram</label>
                <input class="form-control" type="text"  name="instagram" value="{{$setting->instagram}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
