@extends('admin.masterTemplate')
@section('menu-name')
    Menu list
@endsection
@section('main-content')
    <style>
        .tablestyle3 {
            margin: 0;
            padding: 0;
            line-height: 0;
            font-size: 10px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark"> Menu list</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All menus</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Menu Name</th>
                                            <th>Sub Menu</th>
                                            <th>Route</th>
                                            <th>Serial</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <form action="{{ route('admin.menu.update') }}" method="post">
                                            @csrf

                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse ($menus as $each)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>
                                                        <input type="text" name="name[]" class="form-control"
                                                            value="{{ $each->name }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="parent_id[]" class="form-control"
                                                            value="{{ $each->parent_id }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control"
                                                            value="{{ $each->route }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" name="serial[]" class="form-control"
                                                            value="{{ $each->serial }}">
                                                    </td>
                                                    <td>
                                                        <input id="menu_active_inactive_{{ $each->id }}"
                                                            name="menu_active_inactive" class="toggle-class" type="checkbox"
                                                            data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle" data-on="Active" data-off="Inactive"
                                                            @if ($each->status == 'Active') {{ 'checked' }} @endif
                                                            onchange="menuActiveInactive({{ $each->id }})">
                                                    </td>
                                                </tr>
                                            @endforeach

                                            <tr class="text-center">
                                                <td colspan="6">
                                                    <Button type="submit" class="btn btn-info ">UPDATE</Button>
                                                </td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            overview
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@section('js')
    <script type="text/javascript">
        function menuActiveInactive(id) {
            var status = $('#menu_active_inactive_' + id).prop('checked') ? 1 : 0;

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '/menuchangeStatus',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'status': status,
                    'menu_id': id
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
