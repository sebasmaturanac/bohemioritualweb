<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore a world of podcasts on Podcastio. Listen to engaging discussions, interviews, and more.">
    <meta name="author" content="pixelaxis">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="podcast, audio, interviews, discussions, entertainment,ashadul">
    <title>@yield('title', 'Bohemio Ritual | Folklore, charlas y artistas en vivo')</title>

    <meta name="description" content="Bohemio Ritual es un canal de streaming con folklore, charlas, entrevistas y artistas en vivo. Un espacio para compartir música, historias y cultura argentina con identidad propia.">
    <meta name="keywords" content="Bohemio Ritual, folklore, folklore argentino, streaming, artistas en vivo, entrevistas, música argentina, charlas, canal de YouTube, cultura argentina">
    <meta name="author" content="Bohemio Ritual">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="7 days">
    <meta name="theme-color" content="#1c1d20">
    <meta name="color-scheme" content="dark">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/fabicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/fabicon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/fabicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/fabicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/fabicon.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/fabicon.png') }}" color="#ffb340">

    <!-- Open Graph / WhatsApp / Facebook -->
    <meta property="og:locale" content="es_AR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bohemio Ritual">
    <meta property="og:title" content="@yield('og_title', 'Bohemio Ritual | Folklore, charlas y artistas en vivo')">
    <meta property="og:description" content="@yield('og_description', 'Bohemio Ritual es un canal de streaming con folklore, charlas, entrevistas y artistas en vivo. Música, cultura argentina e identidad propia en cada emisión.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/fabicon.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/img/fabicon.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Bohemio Ritual">

    <link rel="shortcut icon" href="{{ asset('assets/img/fabicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
