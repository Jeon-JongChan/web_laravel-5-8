<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','로우무브의 메모장')</title>

        <!-- local global css, js -->
        <link href="{{asset('/global/css/bootstrap-grid.min.css')}}" rel="stylesheet"> 
        <link href="{{asset('/global/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
        <link href="{{asset('/global/css/bootstrap.min.css')}}" rel="stylesheet">
        <script type="text/javascript" src="{{asset('/global/js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('/global/js/bootstrap.bundle.js')}}"></script>
        <script type="text/javascript" src="{{asset('/global/js/jquery-3.4.1.min.js')}}"></script>

        <script type="text/javascript" src="/js/archive.js"></script>
        <link rel="stylesheet" type="text/css" href="/local/css/archive.css">
        <!-- Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="/local/css/swiper_my.css">
        <script src="https://unpkg.com/swiper/js/swiper.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

        <link rel="stylesheet" href="/css/test.css">
        <link href="{{asset('/global/css/bootstrap-grid.min.css')}}" rel="stylesheet"> 
        <link href="{{asset('/global/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
        <link href="{{asset('/global/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('archive-header')
        <section class="container">
            <h1>All</h1>
            @include('globals.card-list')
        </section>
    </body>
</html>