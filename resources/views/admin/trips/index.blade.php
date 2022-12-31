@extends('layouts/admin')
@push('datatableheader')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush
@section('content')
    @if(Session::has('message'))
        <p class="alert alert-info" style="font-size: larger;font-weight: bolder;background: #409aff;color:#fff">{{ Session::get('message') }}</p>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Trip Program</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-6 ">
                <div class="btn-group w-100">
                      <a class="btn btn-success col fileinput-button" href="{{url('admin/trips/create')}}">
                        <i class="fas fa-plus"></i>
                        <span>Add Trip Program </span>
                      </a>

                </div>
            </div>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Details(English)</th>
                    <th>Details(French)</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($trips as $trip)
                    <tr>
                        <td>{{$trip->details}}</td>
                        <td>{{$trip->details_fr}}</td>
                        <td>{{$trip->city->name}}</td>

                        <td>
{{--                            <a type="button" href="{{url('admin/trips/view/'.$trip->id)}}" class="btn btn-block btn-secondary btn-sm">View</a>--}}
{{--                            <a type="button" href="{{url('admin/car/edit/'.$car->id)}}" class="btn btn-block btn-secondary btn-sm">Edit</a>--}}
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">/</button>
                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a type="button" href="{{url('admin/trips/edit/'.$trip->id)}}" class="btn-sm">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a type="button" href="{{url('admin/trips/delete/'.$trip->id)}}" class="btn-sm">Delete</a>
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
@endpush
