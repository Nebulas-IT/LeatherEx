<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - LeatherEx Ltd.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/favicon.png') }}"/>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto Condensed'>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/normalize.css') }}">
    <!--	<link rel="stylesheet" type="text/css" href="assets/css/squarespace.css">-->
    <!-- Our Custom CSS -->
    <!--    <link rel="stylesheet" href="https://bootstrapious.com/tutorial/sidebar/style3.css">-->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mobile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/parallax.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cart.css') }}">

    @stack('css')
</head>
<body>
<div class="template">
    <header>
        @include('frontend.layouts.partial.header_top_feed')
        <div class="header-top row">
            @include('frontend.layouts.partial.navbar')
        </div>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="glyphicon glyphicon-remove"></i>
            </div>

            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

    </header>



<!-- page content -->
@yield('content')
<!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="row">
            <div class="text-center social-icon">
                <div class="social">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/LeatherexFootwearBangladesh" class="fb-icon" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/LeatherexFootwearBangladesh" class="youtube-icon" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/leatherex-footwear-industries-ltd" class="linkedin-icon" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="Footer-nav text-center" data-content-field="navigation">
                <div class="Footer-nav-group"><a href="/faq-1" class="Footer-nav-item">FAQ</a><a
                            href="/shippingreturnpolicy" class="Footer-nav-item">Returns</a><a href="/stockists"
                                                                                               class="Footer-nav-item">Retailers</a>
                </div>
            </nav>
        </div>
        @if (!Request::is('contact'))
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center news-letter-area">
                <div class="news-letter text-center">
                    <form class="newsletter-form" data-form-id="590f76e09f745610d38abe04" autocomplete="on"
                          method="POST">
                        <header class="newsletter-form-header">
                            <h2 class="newsletter-form-header-title">Hey, why not subscribe?</h2>
                            <div class="newsletter-form-header-description"></div>
                        </header>

                        <div class="newsletter-form-body">
                            <div class="newsletter-form-fields-wrapper form-fields">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="row">
                                            <div class="col-md-8 news-letter-input">
                                                <input type="email" class="newsletter-form-field-element field-element"
                                                       id="exampleInputEmail1" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="newsletter-form-button-wrapper submit-wrapper">
                                                    <button class="newsletter-form-button sqs-system-button sqs-editable-button-layout sqs-editable-button-style sqs-editable-button-shape"
                                                            type="submit" value="Sign Up"><span
                                                                class="newsletter-form-spinner sqs-spin light large"></span><span
                                                                class="newsletter-form-button-label">Sign Up</span><span
                                                                class="newsletter-form-button-icon"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="newsletter-form-footnote">
                        <p>Our subscribers get the news first!</p>
                        <p>Now get 10% off if you subscribe. We’ll send you the code by email.</p>
                    </div>


                    <div class="hidden form-submission-text">
                        <p>Thank you so much! We will keep you updated!</p>
                        <p>10% discount code: SUBSCRIBETOKIKANY</p>
                        <p>KikaNY</p></div>
                    <div class="hidden form-submission-html" data-submission-html=""></div>

                </div>
            </div>
        </div>

        @endif
        <div class="text-center copy-right">
            <p>&copy; 2019 LeatherEx Fashion & Footwear Ltd. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- /footer content -->
</div>

<!-- jQuery -->
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

{{--@include('admin.layouts.partial.javascripts')--}}

<!-- Custom Scripts -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
@stack('scripts')
</body>
</html>
