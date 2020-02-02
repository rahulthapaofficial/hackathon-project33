<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name', 'Laravel') }} | @stack('page_title') </title>
    @include('layouts.partial.styles')
    @stack('custom-styles')
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        @include('layouts.partial.header')
        @include('layouts.partial.sidebar')
        <div class="loader loader-default is-active" data-text=""></div>
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            @yield('main-content')
            @include('layouts.partial.footer')
        </div>
    </div>
    @include('layouts.partial.search-ui')
    @include('layouts.partial.scripts')
    @stack('custom-scripts')
    <script>
        $('.loader').removeClass('is-active');
    </script>
</body>

</html>