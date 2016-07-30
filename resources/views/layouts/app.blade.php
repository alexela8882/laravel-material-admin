<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- BEGIN STYLESHEETS -->
    <link href="{{ URL::asset('fonts/font.css?family=Roboto:300italic,400italic,300,400,500,700,900') }}" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/bootstrap.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/materialadmin.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/material-design-iconic-font.min.css') }}" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ URL::asset('assets/js/libs/utils/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/libs/utils/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed menubar-pin">

    @if (Auth::check() && Auth::user()->role === 1)
        @include('includes.header')
        @include('includes.sidebar')

        <!-- BEGIN BASE-->
        <div id="base">
            @yield('content')
            @include('includes.offcanvas')
        </div><!--end #base-->
        <!-- END BASE -->
    @else
        @yield('content')
    @endif

    <!-- BEGIN JAVASCRIPT -->
    <script src="{{ URL::asset('assets/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/libs/spin.js/spin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/libs/autosize/jquery.autosize.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/App.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/AppNavigation.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/AppOffcanvas.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/AppCard.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/AppForm.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/AppNavSearch.js') }}"></script>
    <script src="{{ URL::asset('assets/js/core/source/AppVendor.js') }}"></script>
        <script src="{{ URL::asset('assets/js/core/demo/Demo.js') }}"></script>
    <!-- END JAVASCRIPT -->
</body>
</html>
