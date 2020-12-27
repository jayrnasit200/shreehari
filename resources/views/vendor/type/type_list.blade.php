@extends('layouts.vendor') @section('css')

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}" />
@endsection @section('content')
@include('title.heading')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Type</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-right m-2">
                    <a href="{{ url('product/type/create') }}" class="btn btn-primary">Add </a>
                </div>
                    <table id="example1" class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $no=1; @endphp
                        <tbody>
                            @foreach ($type as $value)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$value->name}}</td>
                                <td><a href="{{url('product/type/edit',$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{url('product/type/delete',$value->id)}}" class="btn btn-sm btn-danger text-white">Delete</a>
                                    <a href="{{url('product/type/sub_type',$value->id)}}" class="btn btn-sm btn-secondary text-white">Sub Type</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /.container-fluid -->
</div>
@endsection @section('js')

<!-- DataTables -->
<script src="{{ url('admin_assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<script>
    $(function () {
        $("#example1").DataTable();
        $("#example2").DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
        });
    });
</script>

@endsection
