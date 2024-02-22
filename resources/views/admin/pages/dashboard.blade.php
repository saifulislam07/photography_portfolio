@extends('admin.masterTemplate')

@section('menu-name')
    DASHBOARD
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">DASHBOARD</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- /.content-header -->
        @if (Auth::user()->type == 'Admin')
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body bg-light">
                            <!-- Info boxes -->
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <a href="{{ route('list-gallery') }}">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1">
                                                <i class="fas fa-image"></i>
                                            </span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Total Gallery Image</span>
                                                <span class="info-box-number">
                                                    {{ $galleryimage }}
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <a href="{{ route('v-gallery') }}">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-warning elevation-1">
                                                <i class="fas fa-camera"></i>
                                            </span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Total Gallery Video</span>
                                                <span class="info-box-number">
                                                    {{ $galleryvideo }}
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-3">
                                    <a href="{{ route('category') }}">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-danger elevation-1">
                                                <i class="fas fa-list"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Albam</span>
                                                <span class="info-box-number">{{ $categorycount }}</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <a href="{{ route('story') }}">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-danger elevation-1">
                                                <i class="fas fa-book"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Total Story</span>
                                                <span class="info-box-number">{{ $story }}</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-4 col-md-3">
                                    <a href="{{ route('contactsmail') }}">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1">
                                                <i class="fas fa-envelope"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Email</span>
                                                <span class="info-box-number">{{ $contactemail }}</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>



                                <div class="col-12 col-sm-4 col-md-3">
                                    <a href="{{ route('admin.payment.list') }}">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-info elevation-1">
                                                <i class="fas fa-shopping-cart"
                                                    style="color: rgb(255, 255, 255)"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Order</span>
                                                <span class="info-box-number">{{ $invoice }}</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>

                                    <!-- /.info-box -->
                                </div>

                                <div class="col-12 col-sm-4 col-md-3">
                                    <a href="{{ route('achievement') }}">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-black elevation-1">
                                                <i class="fas fa-award" style="color :white"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">National Achievement</span>
                                                <span class="info-box-number">{{ $national }}</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-12 col-sm-4 col-md-3">
                                    <a href="{{ route('achievement') }}">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-black elevation-1">
                                                <i class="fas fa-award" style="color :white"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">International Achievement</span>
                                                <span class="info-box-number">{{ $international }}</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-success">
                                            Visitor Count
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>

                                                    <tr>
                                                        <td>Today</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>This Month</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>This Year</td>
                                                        <td>20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Overall</td>
                                                        <td>20</td>
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <div class="card">
                                        <div class="card-header bg-success">
                                            Order
                                        </div>
                                        <div class="card-body">
                                            <table id="example5" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>SL</td>
                                                        <td>IP</td>
                                                        <td>Client</td>
                                                        <td>Browser</td>
                                                        <td>OS</td>
                                                        <td>Country</td>
                                                        <td>Region</td>
                                                        <td>City</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @forelse ($visitor as $each)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $each->ip }}</td>
                                                            <td>{{ $each->user_id }}</td>
                                                            <td>{{ $each->browser }}</td>
                                                            <td>{{ $each->os }}</td>
                                                            <td>{{ $each->country_name }}</td>
                                                            <td>{{ $each->region_name }}</td>
                                                            <td>{{ $each->city }}</td>
                                                        </tr>
                                                    @empty
                                                        <p>No data</p>
                                                    @endforelse

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body bg-light">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-info">
                                            Order
                                        </div>
                                        <div class="card-body bg-light">
                                            <!-- Info boxes -->
                                            <div class="row">
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
                                                        @forelse ($invoiceList as $each)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>
                                                                    <a class="btn btn-warning btn-xs"
                                                                        href="{{ route('admin.payment.view', $each->id) }}">
                                                                        {{ $each->payment_id }}
                                                                    </a>
                                                                </td>
                                                                <td>{{ $each->payment_type }}</td>
                                                                <td>{{ $each->payment_id }}</td>
                                                                <td>{{ $each->price }}</td>
                                                                <td class="text-center">

                                                                    @if ($each->payment_status == 'PENDING')
                                                                        <a onclick="return confirm('are you sure? you want to confirm this payment ?')"
                                                                            class="btn btn-warning btn-xs text-white show-alert-delete-box"
                                                                            style="font-size: 14px"
                                                                            href="{{ route('admin.payment.accept', $each->id) }}">
                                                                            {{ $each->payment_status }}
                                                                        </a>
                                                                    @elseif ($each->payment_status == 'COMPLETED')
                                                                        <a class=" bg-success  text-white p-1 rounded"
                                                                            style="font-size: 14px">
                                                                            {{ $each->payment_status }}
                                                                        </a>
                                                                    @else
                                                                        <a class="btn btn-warning btn-xs" href="#">
                                                                            {{ $each->payment_status }}
                                                                        </a>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-warning btn-xs"
                                                                        href="{{ route('admin.payment.view', $each->id) }}">
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

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-info">
                                            Inquery
                                        </div>
                                        <div class="card-body bg-light">
                                            <!-- Info boxes -->
                                            <div class="row">
                                                <table id="example3" class="table table-bordered table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>SL</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Message</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        
                                                        $i = 1; ?>
                                                        @foreach ($allcontactme as $key => $value)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $value->name }}</td>
                                                                <td>{{ $value->email }}</td>
                                                                <td>{{ $value->message }}</td>
                                                                <td>

                                                                    @if ($value->status == 'Unread')
                                                                        <a onclick="return confirm('are you sure? you want to confirm this as read ?')"
                                                                            class="btn btn-warning btn-xs text-white show-alert-delete-box"
                                                                            style="font-size: 14px"
                                                                            href="{{ route('admin.inquery.accept', $value->id) }}">
                                                                            {{ $value->status }}
                                                                        </a>
                                                                    @elseif ($value->status == 'Read')
                                                                        <a class=" bg-success  text-white p-1 rounded"
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
                                                                <td>

                                                                    <a onclick="return confirm('are you sure? you want to delete this?')"
                                                                        href="{{ route('delete-email', $value->id) }}"
                                                                        class="btn btn-xs btn-danger"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/. container-fluid -->
            </section>
        @elseif(Auth::user()->type == 'User')
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="info-box">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="card text-center">
                                    <div class="card-body bg-warning">
                                        <h3>Welcome to Dashboard</h3>
                                        <h2 class="text-white">{{ Auth::user()->name }}</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif


        <!-- Main content -->

        <!-- /.content -->
    </div>


@endsection
<!-- Content Wrapper. Contains page content -->
