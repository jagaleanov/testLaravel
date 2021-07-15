<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!--navbar-->
    @include('web.common.nav-header-main')

    <div class="container" id="app">
        @yield('content')
    </div>

    <!--footer-->
    @include('web.common.footer-main')

    <!--script-->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
