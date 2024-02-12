@extends('admin.masterTemplate')
@section('menu-name')
    Payment Details
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
                        <h5 class="m-0 text-dark">PROFILE</h5>
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
                                <h3 class="card-title"> <i class="fa fa-users"></i> Payment Details</h3>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr class="bg-info">
                                                                                <th colspan="2">
                                                                                    Invoice Details
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <td>Email </td>
                                                                                <td>{{ $invoice_details->customer_email }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Payment Type </td>
                                                                                <td>{{ $invoice_details->payment_type }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Payment ID </td>
                                                                                <td>{{ $invoice_details->payment_id }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Currency </td>
                                                                                <td>{{ $invoice_details->currency }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Payment Status </td>
                                                                                <td>
                                                                                    @if ($invoice_details->payment_status == 'PENDING')
                                                                                        <a class="btn btn-warning btn-xs text-white"
                                                                                            style="font-size: 14px"
                                                                                            href="{{ route('admin.payment.accept', $invoice_details->id) }}">
                                                                                            {{ $invoice_details->payment_status }}
                                                                                        </a>
                                                                                    @elseif($invoice_details->payment_status == 'COMPLETED')
                                                                                        <a class=" bg-success  text-white p-1 rounded"
                                                                                            style="font-size: 14px">
                                                                                            {{ $invoice_details->payment_status }}
                                                                                        </a>
                                                                                    @else
                                                                                        <a class="btn btn-warning btn-xs"
                                                                                            href="#">
                                                                                            {{ $invoice_details->payment_status }}
                                                                                        </a>
                                                                                    @endif



                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Total Price </td>
                                                                                <td>{{ $invoice_details->price }}</td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr class="bg-info">
                                                                                <th colspan="5">
                                                                                    Order Details
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    Photo
                                                                                </td>
                                                                                <td>
                                                                                    Price
                                                                                </td>
                                                                                <td>
                                                                                    Quantity
                                                                                </td>
                                                                                <td>
                                                                                    Total
                                                                                </td>
                                                                                <td>
                                                                                    Download
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tbody>
                                                                            @php
                                                                                $totalPrice = 0;
                                                                            @endphp
                                                                            @foreach ($invoice_details['orders'][0]['suborders'] as $suborder)
                                                                                <tr>
                                                                                    <td>
                                                                                        @php
                                                                                            $webGallery = \App\Models\WebGallery::where('id', $suborder['product_id'])->first();
                                                                                            // dd($webGallery);
                                                                                        @endphp
                                                                                        @if ($webGallery)
                                                                                            <img class="zoom"
                                                                                                width="120px"
                                                                                                src="{{ asset('galleryImage/' . $webGallery->images) }}"
                                                                                                alt="{{ $webGallery->title }}">
                                                                                        @else
                                                                                            No Image Available
                                                                                        @endif
                                                                                    </td>
                                                                                    <td>{{ $suborder->price }}</td>
                                                                                    <td>{{ $suborder->quantity }}</td>
                                                                                    <td>{{ $totalPrice += $suborder->quantity * $suborder->price }}
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($invoice_details->payment_status == 'COMPLETED')
                                                                                            <a target="_blank"
                                                                                                class="btn btn-primary btn-xs"
                                                                                                href="{{ $webGallery->url }}">CLICK
                                                                                                HERE</a>
                                                                                        @else
                                                                                            <b>Payment Not Done yet</b>
                                                                                        @endif

                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    style="text-align: center"><b>TOTAL</b>
                                                                                </td>
                                                                                <td><b>{{ $totalPrice }}</b></td>
                                                                            </tr>

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
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
