@extends('layouts/admin')
@push('select2')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

@endpush
<style>
    .images-preview-div img
    {
        padding: 10px;
        max-width: 100px;
    }
</style>
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
        <h3 class="card-title">Eit Trip Program</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{url('admin/trips/update')}}" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title(English)</label>
                    <input type="text" class="form-control" rows="3" name="title" id="title" value="{{$trip->title}}" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title_fr">Title(French)</label>
                    <input type="text" class="form-control" rows="3" name="title_fr" id="title_fr" value="{{$trip->title_fr}}" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Details(English)</label>
                    <textarea class="form-control" rows="3" name="details" id="details">{{$trip->details}} </textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Details(French)</label>
                    <textarea class="form-control" rows="3" name="details_fr" id="details_fr" > {{$trip->details_fr}}</textarea>
                </div>
            </div>

            <div class=" col-md-12">
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" id="city_id" name="city_id"  style="width: 100%;" required>
                       @foreach($cities as $city)
                           <option value="{{$city->id}}">{{$city->name}}</option>
                       @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" class="form-control" name="images[]" id="images" placeholder="Choose images" multiple >
                </div>
                @error('images')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="mt-1 text-center">
                    <div class="images-preview-div"> </div>
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
@push('multi-images-upload')
{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
    <script >
        $(function() {
        // Multiple images preview with JavaScript
            var previewImages = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#images').on('change', function() {
                previewImages(this, 'div.images-preview-div');
            });
        });
    </script>
@endpush

