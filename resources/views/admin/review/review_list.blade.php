@extends('layouts.admin') @section('css')

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
                    <h3 class="card-title">Categories</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-right m-2">
                    <a href="{{ url(admin().'categories/create') }}" class="btn btn-primary">Add </a>
                </div>
                    <table id="example" class="table  table-striped">
                        <thead>
                            <tr>
                                <!-- <th>#</th> -->
                                <th>ID</th>
                                <th>Name</th>
                                <!-- <th>image</th>
                                <th>status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
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
            $('#example').DataTable({
                 processing: true,
                serverSide: true,
                ajax: "{!! route('categories_data') !!}",
                columns: [
                     // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    // { data: 'name', name: 'name' },
                    // { data: 'image', name: 'image' },
                    //  {
                    //     "name": "image",
                    //     "data": "image",
                    //     "render": function (data, type, full, meta) {
                    //         return "<img src=\""+ data + "\" height='50' width='50' />";
                    //     },
                    //     "title": "Image",
                    //     "orderable": true,
                    //     "searchable": true
                    // },
                    // { data: 'status', name: 'status' },
                    
                    { data: "action" }
                ]
            });
        });
    </script>

@endsection
