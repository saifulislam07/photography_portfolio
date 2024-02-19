@extends('admin.masterTemplate')
@section('menu-name')
    All Message
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">All Message</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Message</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Client Name</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $i = 1; ?>
                                        @foreach ($allmessages as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->client_name }}</td>
                                                <td>{{ $value->message }}</td>

                                                <td>

                                                    @if ($value->status == 'Inactive')
                                                        <a onclick="return confirm('are you sure? you want to confirm this as read ?')"
                                                            class="btn btn-warning btn-xs text-white show-alert-delete-box"
                                                            style="font-size: 14px"
                                                            href="{{ route('admin.message.action', ['id' => $value->id, 'value' => 'Active']) }}">
                                                            {{ $value->status }}
                                                        </a>
                                                    @elseif ($value->status == 'Active')
                                                        <a class=" bg-success  text-white p-1 rounded"
                                                            href="{{ route('admin.message.action', ['id' => $value->id, 'value' => 'Inactive']) }}"
                                                            style="font-size: 14px">
                                                            {{ $value->status }}
                                                        </a>
                                                    @else
                                                        <a class="btn btn-warning btn-xs" href="#">
                                                            {{ $value->status }}
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>{{ $value->created_at }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
