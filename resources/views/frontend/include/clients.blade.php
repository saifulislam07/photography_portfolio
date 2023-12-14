@php
    $allclient = \App\Models\Client::all();

@endphp


<div class="col-md-12 col-sm-6">
    <h1 class="heading text-center">Works with</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach ($allclient as $each)
                <div class="col-6 col-md-3 " style="margin-bottom: 10px">
                    <img src="{{ asset('clients/' . $each->image) }}" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>


</div>
<br>
