@extends('admin.masterTemplate')

@section('menu-name')
    Edit Admin
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Edit Admin</h5>
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
                                <h3 class="card-title"> <i class="fa fa-users"></i> Edit Admin</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('updateuser', $userinfo->id) }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="{{ $userinfo->name }}" placeholder="Name"
                                                    class="form-control" name="name">
                                                @error('name')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" value="{{ $userinfo->email }}" placeholder="email"
                                                    class="form-control" name="email">
                                                @error('email')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>





                                        <div class=" col-sm-6 ">
                                            <button type="submit" class="btn btn-info">UPDATE</button>
                                        </div>
                                    </div>
                                </form>
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
