@extends('frontend.layouts.index')

@section('title','Shop')


@push('css')

@endpush


@section('content')

    <section id="main-content">
        @include('frontend.layouts.partial.navbar_bottom')

        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-6">
                <div style="background: red">
                    <?php
                    if ($product->product_images) {
                        $image = "assets/images/".$product->product_images->image_url;
                    } else {
                        $image = "assets/not_available.png";
                    }
                    ?>
                    <img src="{{ asset($image) }}" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-6">
                <div>
                    <h2>{{ $product->product_name }}</h2>
                    <p class="product-details-excerpt">Our sandals are hand-cobbled and custom-made.

                        All sandals can be made in men's and women's sizes and are made to order. Women's sandals have thinner straps, a thinner sole, and a narrower base. Lead time is 10-14 days.

                        All sandals feature a handmade arch and are hand-dyed and custom-made based on your foot tracing and your shoe size.

                        Click here for instructions on how to trace your feet.

                        Important: without a tracing we cannot make your sandals.</p>
                </div>
            </div>

    </section> <!--End of main-content-->

@endsection

@push('scripts')

@endpush
