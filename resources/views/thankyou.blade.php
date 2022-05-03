@extends('layouts.main')

@section('content')

<section style="margin: 50px auto;" class="container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
        <h3 style="margin-bottom: 20px">Thank You</h3>

            @if(Session::has('order_id') && Session::get('order_id') != null)
                <h4 style="color:blue" class="my-5">
                    Order ID: {{Session::get('order_id')}}
                </h4>
                
                <br>
                
                <p>
                    Please Keep Order ID for Future Reference
                </p>
            @endif
    </div>
</section>

@endsection