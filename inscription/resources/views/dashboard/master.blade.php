<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <!--navbar-->
    @include('dashboard.common.nav-header-main')

    <!--status messages-->
    @include('dashboard.common.session-flash-status')


    <div class="container">
        @yield('content')
    </div>
    <!--footer-->
    <!--script-->
</body>

</html>
