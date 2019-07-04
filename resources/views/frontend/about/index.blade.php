@extends('frontend.layouts.index')

@section('title','About')


@push('css')

@endpush


@section('content')

    <section id="main-content" class="template-common">
        <div class="header-bottom">
            @include('frontend.layouts.partial.navbar_bottom')
        </div>
        <div class="kikany-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset("frontend/img/static/Goods_Backpacks.jpg") }}" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{ asset("frontend/img/static/Goods_Bags2.jpg") }}" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{ asset("frontend/img/static/Goods_WalletsCases.jpg") }}" alt="New york" style="width:100%;">
                    </div>
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

        <div class="row">
            <div class="sqs-block"> . </div>
            <div class="sqs-block about-text-block">
                <p class="text-center">We uphold a tradition of reliable and attractive leather goods to last a lifetime. All our products are designed and hand-crafted in our studio. We use sturdy, ethically-sourced hides from Chicago and Italy to bring you leather bags, sandals, belts, and small goods of impeccable quality. Our hardware is solid brass, hand-tooled in small batches by our foundry in England.</p>
            </div>
        </div>
        <div class="row">
            <div class="sqs-block">
                <div class="col-md-8 col-md-offset-2 about-image">
                    <div class="col-md-6">
                        <img src="{{ asset("frontend/img/about/Kika_.jpg") }}" alt="Kika" class="img-responsive pull-right">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset("frontend/img/about/sabine-about.jpg") }}" alt="Sabine" class="img-responsive pull-left">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sqs-block"> . </div>
            <div class="sqs-block about-text-block">
                <p class="text-left">Twenty years ago, Kika Vliegenthart, a Dutch documentary film student studying at the New School, walked into the Lower East Side workshop of the legendary leathersmith Babara Shaum, who showed Kika the door. But it was too late; Kika had fallen in love with the craft, and refused to leave. So began a rigorous leathersmith apprenticeship that would alter her life.</p>
                <p class="text-left">Fifteen years later, Kika, now a master at the craft, began designing leather goods on her own. She met Sabine Spanjer, a designer and film editor living in Amsterdam, and together they focused their attention fully on leatherwork. They established a signature brand of high-quality, beautiful, and reliable leather goods, hand-built from their studio. Their collection of backpacks, bags, sandals, belts, and small goods, sourced from impeccable leather hides and hand-tooled European brass, has made an indelible mark on Brooklyn, New york.</p>
                <p class="text-left">Currently KikaNY is expanding to Europe from where they will operate in the near future.</p>
                <p class="text-left">Their leather goods are shown in trade shows and stores all over the world!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="sqs-block"> . </div>
            <div class="sqs-block about-text-block">
                <p class="text-center">Follow us...</p>
            </div>
        </div>
        <style>
            .col-md-3 {
                padding: 0;
                margin: 0 auto;
            }
        </style>
        @include('frontend.about.partial.bottom')

    </section> <!--End of main-content-->

@endsection

@push('scripts')

@endpush