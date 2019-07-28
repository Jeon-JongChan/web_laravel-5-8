<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{@yield('title','로우무브의 메모장')}}</title>

        <!-- global css, js -->
        <link href="{{asset('/global/css/bootstrap-grid.min.css')}}" rel="stylesheet">
        <link href="{{asset('/global/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
        <link href="{{asset('/global/css/bootstrap.min.css')}}" rel="stylesheet">
        <script type="text/javascript" src="{{asset('/global/js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('/global/js/bootstrap.bundle.js')}}"></script>
        <script type="text/javascript" src="{{asset('/global/js/jquery-3.4.1.min.js')}}"></script>
    </head>
    <body>
        @yield('header')
        @yield('content')
        @yield('footer')
    </body>
</html>
