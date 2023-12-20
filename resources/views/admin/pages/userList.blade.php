@extends('admin.masterTemplate')

@section('menu-name')
    ALL USERS
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">ALL ADMIN</h5>
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
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Admins</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Join</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($users as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>

                                                    <input id="user_active_inactive_{{ $value->id }}"
                                                        name="user_active_inactive" class="toggle-class" type="checkbox"
                                                        data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                        data-on="Active" data-off="Inactive"
                                                        @if ($value->status == 1) {{ 'checked' }} @endif
                                                        onchange="userActiveInactive({{ $value->id }})">

                                                </td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>
                                                    <a href="" class="btn btn-xs btn-info"><i
                                                            class="fas fa-edit"></i></a>
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


@section('js')
    <script type="text/javascript">
        function userActiveInactive(id) {
            var status = $('#user_active_inactive_' + id).prop('checked') ? 1 : 0;

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '/userchangeStatus',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'status': status,
                    'user_id': id
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
@endsection
<!-- Content Wrapper. Contains page content -->
