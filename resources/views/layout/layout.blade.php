<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
        <title>Laravel</title>

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
