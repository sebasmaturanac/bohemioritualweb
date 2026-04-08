<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore a world of podcasts on Podcastio. Listen to engaging discussions, interviews, and more.">
    <meta name="author" content="pixelaxis">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="podcast, audio, interviews, discussions, entertainment,ashadul">
    <title>@yield('title', 'Bohemio Ritual')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/fabicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    @yield('content')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js_1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js_0.4.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos@2.3.1-dist-aos.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
