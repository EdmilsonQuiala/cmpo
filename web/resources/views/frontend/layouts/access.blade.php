<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}">
    <title>{{ config('app.name', 'album') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fakeLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

    <div class="navbar">
        <div class="left">

        </div>
        <div class="title">
            @yield('title')
        </div>
        <div class="right">

        </div>
    </div>

    <div class="pages-wrapper">

        <div class="separator-large"></div>

        <div class="sign-up">
            <div class="container">
                @yield('content')

                @include('msg.system')
                @include('msg.user')
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fakeLoader.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.big-slide.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
