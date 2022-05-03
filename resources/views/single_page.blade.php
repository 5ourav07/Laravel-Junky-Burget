@extends('layouts.main')
@section('content')

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Item's Details
            </h2>
        </div>

        <div class="filters-content">
            <div class="row grid">

                @foreach($sp as $p)
                <div class="col-sm-6 col-lg-12 all">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img style="width: 300px" src="{{ asset('images/'. $p->image) }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $p->name }}
                                </h5>

                                <p>
                                    {{ $p->description }}
                                </p>

                                <p>
                                    {{ $p->category }} - {{ $p->type }}
                                </p>
                                <div class="options">
                                    <h6>
                                        {{ $p->price }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

@endsection