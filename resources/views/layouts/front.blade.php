<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="frontend/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="frontend/css/custom.css" rel="stylesheet" />
    <link href="frontend/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="frontend/css/owl.theme.default.min.css" rel="stylesheet" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('layouts.inc.frontnavbar')
        <div class="content">
            @yield('content')
        </div>




<script src="frontend/js/jquery-3.6.1.min.js"></script>

<script src="frontend/js/perfect-scrollbar.jquery.min.js"></script>

<script src="frontend/js/owl.carousel.min.js"></script>

@yield('script')

</body>
</html>

