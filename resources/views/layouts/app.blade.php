<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Llankay | @yield('title')</title>
    {{--<link href="{{ asset('css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="{{ asset('css/flat-ui.min.css') }}">--}}
</head>
<body>
    <header>
        @yield('header')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    {{--<script src="{{ asset('js/flat-ui.min.js') }}"></script>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
