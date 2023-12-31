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
                    <div class="col-md-9">
                        <table class="table table-dark table-cart">
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
                                                    <img src="" alt="image">
                                                    <div class="text">
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

                    <div id="sidebar" class="col-md-3">
                        <div class="d-summary">
                            <h3>Summary</h3>
                            <div class="de-flex">
                                <div>Total</div>
                                <div class="strong">${{ $total }}</div>
                            </div>
                            <div class="spacer-line"></div>
                            <a href="#" class="btn-custom btn-fullwidth text-center">Checkout</a>
                        </div>
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
