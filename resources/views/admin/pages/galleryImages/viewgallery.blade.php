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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Create Time</th>
                                            <th>Tags</th>
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
                                                <td>{{ $value->title }}</td>
                                                <td><img width="50px" class="zoom"
                                                        src="{{ asset('galleryImage/' . $value->images) }}">
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($value->created_at)->format('j F, Y h:i A') }}
                                                </td>
                                                <td>
                                                    {{ Str::of($value->tags)->limit(20) }}</td>
                                                <td>
                                                    {{ Str::of($value->details)->limit(20) }}
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
