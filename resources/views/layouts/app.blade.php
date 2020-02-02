<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @stack('page_title')</title>

    <!-- Scripts -->
    <script src="{{ asset('public/dashboard/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('public/dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashboard/css/style.css') }}" rel="stylesheet">
    <style>
        body{
            
            font-size: 15px;
        }
        body::after {
            content: "";
            background: url('{{ asset("public/dashboard/img/login-bg.jpg") }}');
            background-size: cover;
            position: absolute;
            top: -150px;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.5;
            z-index: -1;
        }

        .card-header{
            background: none;
            border-top: 2px solid #574B90;
        }
    </style>
</head>

<body>
    <div id="app">
        <section class="section">
            @yield('content')
        </section>
    </div>
</body>

</html>