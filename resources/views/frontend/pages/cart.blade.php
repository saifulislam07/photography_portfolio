@extends('frontend.masterTemp')
@section('fmenuname')
    BUY PHOTO
@endsection
@section('front-main-content')
    <div id="content" class="no-bottom no-top">

        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>BUY photo</h1>
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep">/</li>
                            <li>BUY photo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <table class="table table-dark table-cart ">
                            <thead>
                                <tr>
                                    <th scope="col">Items</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Final Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $total = 0 @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <tr data-id="{{ $id }}">
                                            <td>
                                                <div class="d-cart-item">

                                                    <div class="text-left" style="margin-left: 10px;">
                                                        {{ $details['title'] }}
                                                        <div class="price">${{ $details['price'] }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Quantity">

                                                <input class="text-center quantity update-cart"
                                                    value="{{ $details['quantity'] }}" type="number" value="1"
                                                    min="0" max="10">
                                            </td>
                                            <td data-th="Subtotal"> ${{ $details['price'] * $details['quantity'] }}</td>
                                            <td class="actions" data-th="">
                                                <button class="btn btn-danger btn-sm remove-from-cart"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div id="" class="col-md-3 col-sm-12">
                        <div class="d-summary">
                            <h3>Summary</h3>
                            <div class="de-flex">
                                <div>Total</div>
                                <div class="strong">${{ $total }}</div>
                            </div>
                            <div class="spacer-line"></div>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('paypal.payment') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="total" value="{{ $total }}">
                                    <!-- Button to submit the form -->
                                    <button type="subnmit" class="btn btn-custom bg-warning">
                                        <img width="50px" src="{{ asset('paymentgetway/PayPal.png') }}" alt="">
                                    </button>
                                </form>

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#bkashmodal">
                                    <img width="50px" src="{{ asset('paymentgetway/bkash.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="bkashmodal" tabindex="-1" role="dialog" aria-labelledby="bkashmodaltitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bkash Payment Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id='contact_form' method="post" action="{{ route('bkash.payment') }}">
                            @csrf
                            <div class="row ">
                                <div class="col-md-12" style="color: black!important">
                                    <div class="form-group">
                                        <label for="pwd">Total Amount </label>
                                        <input type="text" style="color: black" value="<?php echo $total . '$'; ?>"
                                            class="form-control" readonly name="total_amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Bkash Number (Personal) </label>
                                        <input type="text" style="color: black" class="form-control" readonly
                                            placeholder="01916665832 Send Money" name="to_number">
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">Amount <span style="font-size: 10px; color : red">You will
                                                Pay
                                                ({{ $total }} *
                                                105 =
                                                {{ $total * 105 }}), No need to pay extra charge </span> </label>
                                        <input type="text" style="color: black" class="form-control"
                                            placeholder="Amount" value="{{ $total * 105 }}" name="amount">

                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Trxid *</label>
                                        <input type="text" style="color: black" class="form-control"
                                            placeholder="bKash Transaction ID" name="trnx_number">
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
