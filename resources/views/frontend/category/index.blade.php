@extends('frontend.layouts.index')

@section('title','Shop')


@push('css')

@endpush


@section('content')

    <section id="main-content" class="template-common">
        @include('frontend.layouts.partial.navbar_bottom')

        <div class="row">
                @foreach($products as $key => $product)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div><p class="text-center">Quick View</p></div>
                    <a href="{{ route('user.product.show', $product->id) }}">
                        <div>
                            <?php
                            if ($product->product_images) {
                                $image = "assets/images/".$product->product_images->image_url;
                            } else {
                                $image = "assets/not_available.png";
                            }
                            ?>
                            <img src="{{ asset($image) }}" alt="" class="img-responsive">
                        </div>
                        <div class="product-title"><h3 class="text-center">{{ $product->product_name }}</h3></div>
                    </a>
                </div>
                @endforeach
        </div>

    </section> <!--End of main-content-->

@endsection

@push('scripts')

@endpush
