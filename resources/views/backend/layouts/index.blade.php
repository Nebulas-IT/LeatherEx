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

    <title>@yield('title') - LeatherX Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon/favicon.png') }}"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/matrix-media.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    @stack('css')
</head>
<body>

<!--Header-part-->
<div id="header" class="header-logo">
    <a href="{{ route('admin.index') }}">
        <img src="{{ asset("assets/logo.png") }}" alt="LeatherEx" class="img-responsive">
    </a>
</div>
<!--close-Header-part-->

@include('backend.layouts.partial.navbar')

@include('backend.layouts.partial.sidebar')
<div id="content">
    <?php /* ?>
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ route('admin.index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <?php */?>
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2019 &copy; LeatherX Admin. Developed by <a href="https://ferdousanam.com">Ferdous Anam</a> </div>
</div>
<!--end-Footer-part-->
<script src="{{ asset("backend/js/jquery.min.js") }}"></script>
<script src="{{ asset("backend/js/jquery.ui.custom.js") }}"></script>
<script src="{{ asset("backend/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("backend/js/matrix.js") }}"></script>
{{--@include('backend.layouts.partial.javascripts')--}}

@stack('scripts')
</body>
</html>
