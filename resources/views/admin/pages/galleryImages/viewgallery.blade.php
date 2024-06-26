@extends('admin.masterTemplate')

@section('menu-name')
    ALL GALLERY IMAGES
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">ALL GALLERY IMAGES</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('gallery') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add Images</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">

        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> ALL GALLERY IMAGES</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Create Time</th>
                                            <th>BOB</th>
                                            <th>MCI</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($galleriImages as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->cat_title }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->price }}</td>
                                                <td><img width="50px" class="zoom"
                                                        src="{{ asset('galleryImage/' . $value->images) }}">
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($value->created_at)->format('j F, Y h:i A') }}
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="bob" class="status-checkbox"
                                                        data-id="{{ $value->id }}"
                                                        {{ $value->my_best == 1 ? 'checked' : '' }}>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="mci" class="mci-status-checkbox"
                                                        data-mci="{{ $value->id }}"
                                                        {{ $value->mci == 1 ? 'checked' : '' }}>
                                                </td>
                                                <td>
                                                    {{ Str::of($value->details)->limit(20) }}
                                                </td>
                                                <td>

                                                    <input id="image_active_inactive_{{ $value->id }}"
                                                        name="image_active_inactive" class="toggle-class" type="checkbox"
                                                        data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                        data-on="Active" data-off="Inactive"
                                                        @if ($value->status == 1) {{ 'checked' }} @endif
                                                        onchange="imageActiveInactive({{ $value->id }})">
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('Are you sure you want to Delete This Record ?')"
                                                        href="delete-Image/{{ $value->id }} "
                                                        class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                    <a href="edit-Image/{{ $value->id }} "
                                                        class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example1').DataTable();

            $('#example1').on('change', '.status-checkbox', function() {
                var status = $(this).prop('checked') ? 1 : 0;
                var imageId = $(this).data('id');

                $.ajax({
                    url: '{{ route('updateImageStatus') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: imageId,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.success);
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });


        $(document).ready(function() {
            $('#example1').DataTable();


            $('#example1').on('change', '.mci-status-checkbox', function() {
                var status = $(this).prop('checked') ? 1 : 0;
                var imageId = $(this).data('mci');

                $.ajax({
                    url: '{{ route('updateImageStatusMci') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: imageId,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.success);
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

        function imageActiveInactive(id) {
            var status = $('#image_active_inactive_' + id).prop('checked') ? 1 : 0;

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '/changeStatus',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'status': status,
                    'image_id': id
                },
                success: function(data) {
                    if (data.type == 1) {
                        toastr.success('Active: Status changed successfully.');
                    } else {
                        toastr.info('Inactive: Status changed successfully.');
                    }
                },
                error: function(error) {
                    // location.reload();
                }
            });
        }
    </script>
@endsection
<!-- Content Wrapper. Contains page content -->
