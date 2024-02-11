@extends('admin.masterTemplate')
@section('menu-name')
    Payement List
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
                        <h5 class="m-0 text-dark"> Payement List</h5>
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
                            <div class="card-header bg-warning">
                                <h3 class="card-title"> <i class="fa fa-users"></i> Payment History</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Invoice</th>
                                            <th>Payment Type</th>
                                            <th>Payment ID</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @forelse ($invoice as $each)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $each->order_id }}</td>
                                                <td>{{ $each->payment_type }}</td>
                                                <td>{{ $each->payment_id }}</td>
                                                <td>{{ $each->price }}</td>
                                                <td>{{ $each->payment_status }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="{{ route('payment.view', $each->id) }}">
                                                        <i class="fa fa-desktop"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty

                                            <td>No Data</td>
                                        @endforelse

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
