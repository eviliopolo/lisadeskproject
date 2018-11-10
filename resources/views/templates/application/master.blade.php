<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/vendor/wrappixel/material-pro/4.1.0/assets/images/favicon.png">
    {{--<link rel="icon" type="image/png" sizes="16x16" href="/vendor/wrappixel/material-pro/4.1.0/assets/images/favicon.png">--}}
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>

    @stack('before-styles')

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template CSS -->

    @section('template-css')
    {{--Defaults to Material and Blue--}}

    {{-- ### Choose only the one you want ### --}}
    <link href="/css/material/style.css" rel="stylesheet">
    {{--<link href="/css/dark/style.css" rel="stylesheet">--}}
    {{--<link href="/css/minisidebar/style.css" rel="stylesheet">--}}
    {{--<link href="/css/horizontal/style.css" rel="stylesheet">--}}
    {{--<link href="/css/material-rtl/style.css" rel="stylesheet">--}}

    <!-- You can change the theme colors from here -->
    <link href="/css/colors/blue.css" id="theme" rel="stylesheet">
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/vendor/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="/vendor/respondjs/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('after-styles')

</head>

<body class=" @yield('body-classes') card-no-border ">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<div id="main-wrapper">
@yield('layout-content')
</div>

@stack('before-scripts')

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
@section('jquery')
{{--    If not using jQuery from NPM and webpack build, don't override this section,    --}}
{{--    or user @parent inside when you do it, to include this jquery script            --}}
<script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/jquery/jquery.min.js"></script>
@show
<!-- Bootstrap tether Core JavaScript -->
<script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/popper/popper.min.js"></script>
<script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/vendor/wrappixel/material-pro/4.1.0/material/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/vendor/wrappixel/material-pro/4.1.0/material/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/vendor/wrappixel/material-pro/4.1.0/material/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
@section('template-custom-js')
    {{--Defaults to Material --}}

    {{-- ### Choose only the one you want ### --}}
    <script src="/vendor/wrappixel/material-pro/4.1.0/material/js/custom.min.js"></script>
    {{--<script src="/vendor/wrappixel/material-pro/4.1.0/dark/js/custom.min.js"></script>--}}
    {{--<script src="/vendor/wrappixel/material-pro/4.1.0/minisidebar/js/custom.min.js"></script>--}}
    {{--<script src="/vendor/wrappixel/material-pro/4.1.0/horizontal/js/custom.min.js"></script>--}}
    {{--<script src="/vendor/wrappixel/material-pro/4.1.0/material-rtl/js/custom.min.js"></script>--}}
@show
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


@stack('after-scripts')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.google_analytics') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '{{ config('app.google_analytics') }}');
</script>



</body>

</html>
