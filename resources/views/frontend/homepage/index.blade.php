@extends('frontend.layouts.index')

@section('title','Home')


@push('css')
    <link rel="stylesheet" href="{{ asset("frontend/vendor/carousel2/css/style.css") }}">
@endpush


@section('content')
    <section id="main-content">
        <div class="template-common">
            @include('frontend.layouts.partial.navbar_bottom')
        </div>
        <div class="box" id="vmc-slide">
            <ul>
                @foreach ($carousel_product as $key => $product)
                    <?php
                    if ($product->product_images) {
                        $image = "assets/images/".$product->product_images->image_url;
                    } else {
                        $image = "assets/not_available.png";
                    }
                    ?>
                <li title="Image Caption Here"><img src="https://picsum.photos/1000/400" /></li>
                @endforeach
            </ul>
        </div>


















        <div class="kikany-carousel row">
            <div id="myCarousel" class="carousel slide col-md-10 col-md-offset-1" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <style>
                    .carousel-caption {
                        color: #000;
                        border-radius: 5px;
                    }
                </style>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach ($carousel_product as $key => $product)
                        <?php
                        if ($product->product_images) {
                            $image = "assets/images/".$product->product_images->image_url;
                        } else {
                            $image = "assets/not_available.png";
                        }
                        ?>
                        <div class="item <?php if ($key == 0) echo 'active'; ?>">
                            <img src="{{ asset($image) }}" alt="{{ $product->product_title }}" style="width:100%;">
                            <div class="carousel-caption">
                                <h2>{{ $product->product_category->category_name }}</h2>
                                <p></p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> <!--End of kikany-carousel-->

        <div class=""></div>

        <div class="parallax-window-1 img-responsive" data-parallax="scroll" data-image-src="{{ asset('assets/images/DSCF6456.JPG') }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 block-content">
                    <h1 class="text-right"></h1>
                    <h3 class="text-right"><a href="{{ route('user.shop.index') }}"></a></h3>
                </div>
            </div>
        </div>
        <div class="parallax-window-2" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/Classic-2.jpg') }}">
            <p></p>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/the life of A SHOE.jpg') }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 block-content">
                    <h1 class="text-right"></h1>
                    <h3 class="text-right"><a href="/shop"></a></h3>
                </div>
            </div>
        </div>
        <div class="parallax-window-4" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/organik (1).jpg') }}">
            <p class="text-center"></p>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/images/DSCF7060.JPG') }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 block-content">
                    <h1 class="text-right">Corporate Fashion</h1>
                    <h3 class="text-right"><a href="/shop"></a></h3>
                </div>
            </div>
        </div>
        <div class="parallax-window-4" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/Versatility is Chic..jpg') }}">
            <p class="text-center"></p>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/gift-card--28.05.2018-_03.jpg') }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 block-content">
                    <h1 class="text-right"></h1>
                    <h3 class="text-right"><a href="/shop"></a></h3>
                </div>
            </div>
        </div>
        <div class="parallax-window-2" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/corporate lady.jpg') }}">
            <p class="text-center"></p>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/Tasting (2).jpg') }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 block-content">
                    <h1 class="text-right"></h1>
                    <h3 class="text-right"><a href="/shop"></a></h3>
                </div>
            </div>
        </div>
        <div class="parallax-window-2" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/winter boots.jpg') }}">
            <p class="text-center">
            </p>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/Hey buddy,.jpg') }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 block-content">
                    <h1 class="text-right"></h1>
                    <h3 class="text-right"><a href="/shop"></a></h3>
                </div>
            </div>
        </div>
        <div class="parallax-window-5" data-parallax="scroll" data-image-src="{{ asset('assets/home-images/yankeeswap.jpg') }}">

        </div>

        <div id="youtube-tv" class="row-space"></div>
        <div class="content-heading">
            <h2 class="text-center">Leatherex Fashion TV</h2>
        </div>
        <div class="youtube-videos">
            <div class="row">
                <div class="col-md-4">
                    <div class="youtube-video-item">
                        <iframe width="100%" src="https://www.youtube.com/embed/E8k4sb8v4F4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="youtube-video-item">
                        <iframe width="100%" src="https://www.youtube.com/embed/hEm8Nvybx0o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="youtube-video-item">
                        <iframe width="100%" src="https://www.youtube.com/embed/J1fIDJComF4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="youtube-video-item">
                        <iframe width="100%" src="https://www.youtube.com/embed/E8k4sb8v4F4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="youtube-video-item">
                        <iframe width="100%" src="https://www.youtube.com/embed/hEm8Nvybx0o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="youtube-video-item">
                        <iframe width="100%" src="https://www.youtube.com/embed/J1fIDJComF4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--End of main-content-->



@endsection

@push('scripts')
    {{--Parallax JS--}}
    <script type="text/javascript" src="{{ asset('frontend/vendor/parallax/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/vendor/carousel2/vmc.simple.slide.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $('a[href^="#"]').on('click', function(event) {

                var target = $(this.getAttribute('href'));

                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }

            });

            $('#vmc-slide').vmcSimpleSlide({
                minWidth: 400
            });
            $('#re-size').on('click', function () {
                $('#vmc-slide').vmcSimpleSlide('reSize');
            });
            $('#show-box').on('click', function () {
                $('#vmc-slide').show();
            });
            $('#hide-box').on('click', function () {
                $('#vmc-slide').hide();
            });
            $('#show-box-2').on('click', function () {
                $('#vmc-slide').show();
                $('#vmc-slide').vmcSimpleSlide('reSize');
            });
        });
    </script>
@endpush
