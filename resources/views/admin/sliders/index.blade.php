@extends('layouts/admin')
@push('datatableheader')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush
@section('content')
    @if(Session::has('alert-success'))
        <p class="alert alert-success" style="font-size: larger;font-weight: bolder;background: #409aff;color:#fff">{{ Session::get('alert-success') }}</p>
    @endif
    @if(Session::has('alert-danger'))
        <p class="alert alert-danger" style="font-size: larger;font-weight: bolder;background: #409aff;color:#fff">{{ Session::get('alert-danger') }}</p>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sliders</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-6 ">
{{--                <div class="btn-group w-100">--}}
{{--                      <a class="btn btn-success col fileinput-button" href="{{url('admin/cars/create')}}">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                        <span>Add Car </span>--}}
{{--                      </a>--}}

{{--                </div>--}}
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Title(FR)</th>
                    <th>Details</th>
                    <th>Details(FR)</th>
                    <th>image</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                    <tr>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->title_fr}}</td>
                        <td>{{$slider->details}}</td>
                        <td>{{$slider->details_fr}}</td>

                        <td>
                            <a href="{{url('storage/sliders/'.$slider->image)}}" data-toggle="lightbox" data-title="slider">
                                <img src="{{url('storage/sliders/'.$slider->image)}}" width="200" class="img-fluid mb-1" alt="slider"/>
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Action</button>
                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">

                                    <a type="button" href="{{url('admin/sliders/edit/'.$slider->id)}}" class="btn-sm">Edit</a>
                                    <div class="dropdown-divider"></div>

                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection


@push('datatablescript')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>



    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush

@push('datatablescript-2')
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <!-- Ekko Lightbox -->
    <script src="{{asset('admin/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({gutterPixels: 3});
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
@endpush
