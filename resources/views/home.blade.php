@extends('layouts.app')

@section('title', 'Bohemio Ritual')

@section('content')
    <!-- preloader  -->
    <div class="preloader">
        <div class="loader-inner">
            <div class="bohemio-loader-logo">
                <img src="{{ asset('assets/img/bohemio-logo.png') }}" alt="Bohemio Ritual">
            </div>
            <div class="bohemio-loader-ring"></div>
            <span class="bohemio-loader-text">cargando ritual...</span>
        </div>
    </div>

    <!-- bottom to top button -->
    <div class="bottom-to-top position-fixed bottom-0 end-0 mb-4 me-4 fs-xl cursor-pointer">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- header section start  -->
    <header class="header-section position-fixed top-0 start-50 translate-middle-x w-100 py-4">
        <div class="container-fluid">
            <nav class="nav-wrapper d-between">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="w-100" src="{{ asset('assets/img/logo.png') }}" alt="Bohemio Ritual">
                    </a>
                </div>
                <div class="menu-toggler d-flex align-items-center justify-content-lg-between flex-lg-row flex-column gap-xxl-6 gap-4 w-100">
                    <div class="category-nav-menu d-between flex-lg-row flex-column w-100">
                        <div class="category-menu w-100">
                            <div class="category-list-area">
                                <div class="category-wrapper">
                                    <ul class="category-list-items d-flex flex-wrap align-items-baseline mb-xxl-15 mb-4">
                                        <li class="category-item">
                                            <a href="#recentes" class="category-link p-xxl-8 p-sm-4 p-2 d-flex flex-column gap-0 rounded-3">
                                                <img class="category-thumb mb-xxl-8 mb-lg-6 mb-sm-4 mb-2 rounded-3" src="{{ asset('assets/img/category-1.png') }}" alt="Charlas bohemias">
                                                <span class="category-title fs-three mb-xxl-6 mb-lg-4 mb-2">Charlas bohemias</span>
                                                <p class="tcn-40 char-limit" data-maxlength="60">
                                                    Conversaciones relajadas, anécdotas, humor y esa mesa compartida que le da identidad al canal.
                                                </p>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="#about-bohemio" class="category-link p-xxl-8 p-sm-4 p-2 d-flex flex-column gap-0 rounded-3">
                                                <img class="category-thumb mb-xxl-8 mb-lg-6 mb-sm-4 mb-2 rounded-3" src="{{ asset('assets/img/category-2.png') }}" alt="Folklore argentino">
                                                <span class="category-title fs-three mb-xxl-6 mb-lg-4 mb-2">Folklore argentino</span>
                                                <p class="tcn-40 char-limit" data-maxlength="60">
                                                    Zambas, chacareras, guitarras, tradición y cultura popular en un formato vivo y actual.
                                                </p>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="#top-shows" class="category-link p-xxl-8 p-sm-4 p-2 d-flex flex-column gap-0 rounded-3">
                                                <img class="category-thumb mb-xxl-8 mb-lg-6 mb-sm-4 mb-2 rounded-3" src="{{ asset('assets/img/category-3.png') }}" alt="Especiales musicales">
                                                <span class="category-title fs-three mb-xxl-6 mb-lg-4 mb-2">Especiales musicales</span>
                                                <p class="tcn-40 char-limit" data-maxlength="60">
                                                    Encuentros con artistas, versiones en vivo y momentos que no se sienten armados, se sienten reales.
                                                </p>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="#testimonios" class="category-link p-xxl-8 p-sm-4 p-2 d-flex flex-column gap-0 rounded-3">
                                                <img class="category-thumb mb-xxl-8 mb-lg-6 mb-sm-4 mb-2 rounded-3" src="{{ asset('assets/img/category-4.png') }}" alt="Comunidad">
                                                <span class="category-title fs-three mb-xxl-6 mb-lg-4 mb-2">Comunidad</span>
                                                <p class="tcn-40 char-limit" data-maxlength="60">
                                                    Un canal hecho para compartir con la gente, escuchar, comentar y construir una audiencia con identidad.
                                                </p>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="category-link p-xxl-8 p-sm-4 p-2 d-flex flex-column gap-0 rounded-3">
                                                <img class="category-thumb mb-xxl-8 mb-lg-6 mb-sm-4 mb-2 rounded-3" src="{{ asset('assets/img/category-1.png') }}" alt="Suscribite al canal">
                                                <span class="category-title fs-three mb-xxl-6 mb-lg-4 mb-2">Suscribite</span>
                                                <p class="tcn-40 char-limit" data-maxlength="60">
                                                    Entrá al canal oficial de YouTube y acompañá cada transmisión, estreno, invitado y contenido nuevo.
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="category-list-bottom border-dashed pt-xxl-8 pt-lg-6 pt-sm-4 pt-2 d-between gap-3 flex-wrap">
                                        <ul class="category-bottom-links d-flex align-items-center gap-lg-6 gap-sm-4 gap-3 flex-wrap">
                                            <li class="category-bottom-link">
                                                <a href="#top-shows">Programas destacados</a>
                                            </li>
                                            <li class="category-bottom-link">
                                                <a href="#recentes">Últimos contenidos</a>
                                            </li>
                                            <li class="category-bottom-link">
                                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">Canal oficial</a>
                                            </li>
                                        </ul>
                                        <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="bttn-1">
                                            Visitar canal
                                            <span class="icon d-center icon-right">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- nav menu  -->
                        <div class="navbar-toggle-item w-100">
                            <ul class="nav-menu-items gap-3 gap-lg-8">
                                <li class="menu-item">
                                    <button>Inicio</button>
                                    <ul class="sub-menu">
                                        <li class="menu-link"><a href="{{ route('home') }}">Portada</a></li>
                                        <li class="menu-link"><a href="#recentes">Últimos vivos</a></li>
                                        <li class="menu-link"><a href="#about-bohemio">Sobre el canal</a></li>
                                        <li class="menu-link"><a href="#newsletter-02">Novedades</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <button>Canal</button>
                                    <ul class="sub-menu">
                                        <li class="menu-link"><a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">Ir a YouTube</a></li>
                                        <li class="menu-link"><a href="#top-shows">Programas destacados</a></li>
                                        <li class="menu-link"><a href="#testimonios">Comunidad</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <button>Contenido</button>
                                    <ul class="sub-menu">
                                        <li class="menu-link"><a href="#recentes">Novedades</a></li>
                                        <li class="menu-link"><a href="#about-bohemio">Identidad del canal</a></li>
                                        <li class="menu-link"><a href="#top-shows">Estúdio</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <button>Comunidad</button>
                                    <ul class="sub-menu">
                                        <li class="menu-link"><a href="#testimonios">Qué dice la audiencia</a></li>
                                        <li class="menu-link"><a href="#newsletter-02">Recibir novedades</a></li>
                                        <li class="menu-link"><a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">Suscribite</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <section class="hero-section-2 texture-bg pt-120 bgc-2" id="hero">
        <div class="container py-lg-15 py-sm-10 py-6">
            <div class="row g-6 justify-content-between">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="hero-content text-center text-lg-start">
                        <span class="subheading-border fw-medium mb-4 fs-xl">
                            <span class="fs-2xl">
                                <i class="fas fa-rocket"></i>
                            </span>
                            Comienza Bohemio Ritual
                        </span>
                        <h2 class="hero-title display-two mb-6">
                            Folklore y encuentros
                        </h2>
                        <p class="fs-xl fw-normal">
                            Bohemio Ritual, un canal de música, charlas y artistas con alma argentina.
                        </p>
                        <div class="hero-btn-area d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap gap-sm-6 gap-3 mt-lg-10 mt-sm-8 mt-6">
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="bttn-1">
                                Suscribite al canal
                                <span class="icon d-center icon-right">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="bttn-1">Visitar YouTube
                                <span class="icon d-center icon-right">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-banner-wrapper-2 position-relative mt-4 mt-lg-0" data-aos="fade-up">
                        <div class="online-play position-absolute">
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">
                                <img class="w-100" src="{{ asset('assets/img/play.png') }}" alt="Ver canal">
                            </a>
                        </div>
                        <div class="hero-banner-2">
                            <img class="w-100" src="{{ asset('assets/img/hero-banner-2.png') }}" alt="Bohemio Ritual streaming">
                        </div>

                        <div class="guest-list-wrapper position-absolute">
                            <ul class="guest-list d-flex align-items-center">
                                <li class="ms-n4 bor-1"><img class="w-100" src="{{ asset('assets/img/guest-1.png') }}" alt="Invitado"></li>
                                <li class="ms-n4 bor-1"><img class="w-100" src="{{ asset('assets/img/guest-2.png') }}" alt="Invitado"></li>
                                <li class="ms-n4 bor-1"><img class="w-100" src="{{ asset('assets/img/guest-3.png') }}" alt="Invitado"></li>
                                <li class="ms-n4 bor-1"><img class="w-100" src="{{ asset('assets/img/guest-4.png') }}" alt="Invitado"></li>
                                <li class="ms-n4 bor-1"><img class="w-100" src="{{ asset('assets/img/add-guest.png') }}" alt="Más invitados"></li>
                            </ul>
                            <span class="fs-four border-dashed pt-1 mt-4 fw-medium">Invitados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-wave-shape">
            <img class="w-100" src="{{ asset('assets/img/bottom-wave-shape.png') }}" alt="wave shape">
        </div>
    </section>

    <section class="recent-episode-2 pt-120 pb-120 texture-bg-2" id="recentes">
        <div class="container">
            <div class="row g-6 justify-content-between mb-lg-15 mb-sm-10 mb-8" data-aos="flip-right">
                <div class="col-lg-7">
                    <div class="text-center text-lg-start">
                        <span class="subheading-border fw-medium mb-4 fs-xl">
                            <span class="fs-2xl">
                                <i class="fas fa-rocket"></i>
                            </span>
                            Contenido reciente
                        </span>
                        <h4 class="display-four fw-bold">Lo último que está sonando en Bohemio Ritual</h4>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ps-xxl-10">
                        <div class="text-center text-lg-start">
                            <p class="fw-normal mb-lg-10 mb-sm-6 mb-4">
                                Cada transmisión busca algo simple pero difícil de lograr: que el folklore, la charla auténtica y el encuentro entre personas
                                se sientan vivos, cercanos y con alma propia.
                            </p>
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="bttn-1 bttn-outline alt-position">
                                Ver canal completo
                                <span class="icon d-center icon-right">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-6">
                <div class="col-lg-6 h-100" data-aos="fade-left">
                    <div class="episode-card big-card d-flex flex-column rounded-4 p-xxl-10 p-6">
                        <div class="card-top d-between gap-xxl-6 gap-4 mb-6 pb-xxl-18 pb-10">
                            <div class="d-flex align-items-center gap-4 flex-wrap flex-sm-nowrap">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                    <span class="tcn-900 fs-xl">
                                        <i class="fas fa-microphone"></i>
                                    </span>
                                    <span class="fs-lg fw-medium text-nowrap link-text-2">
                                        Mesa Bohemia
                                    </span>
                                </a>
                                <div class="episode-time d-flex align-items-center gap-2">
                                    <span class="tcn-900 fs-xl">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span class="fs-lg fw-medium text-nowrap">
                                        En formato vivo
                                    </span>
                                </div>
                            </div>
                            <div class="record-img d-none d-sm-block">
                                <div class="record-img-animation d-flex height-46">
                                    <img class="w-100" src="{{ asset('assets/img/record-2.png') }}" alt="image">
                                    <img class="w-100" src="{{ asset('assets/img/record-2.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="card-bannr py-20 my-md-20 my-10 position-relative">
                            <div class="card-banner position-absolute z-n1">
                                <img class="w-100" src="{{ asset('assets/img/episode-card-banner-2.png') }}" alt="image">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title fw-bold mb-4">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-text-2">
                                    Entre guitarras, historias y sobremesa: el ritual de compartir sin actuar
                                </a>
                            </h3>
                            <p class="fs-sm">
                                Un canal que apuesta por la charla real, la música que emociona y los encuentros que dejan algo más que contenido de fondo.
                            </p>
                            <div class="card-btns d-between flex-wrap flex-sm-nowrap gap-6 mt-lg-8 mt-6">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="icon-btn d-center gap-3">
                                    <span class="icon fs-xl fw-bold">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <span class="text fw-semibold">
                                        Ver en YouTube
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-grid gap-6">
                        <div class="episode-card small-card p-xxl-10 p-6 bgc-2 rounded" data-aos="fade-left">
                            <div class="card-top d-between gap-xxl-6 gap-4 mb-6">
                                <div class="d-flex align-items-center gap-4 flex-wrap flex-sm-nowrap">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                        <span class="tcp-1 fs-xl">
                                            <i class="fas fa-microphone"></i>
                                        </span>
                                        <span class="fs-lg fw-medium text-nowrap link-text">
                                            Entrevistas a artistas
                                        </span>
                                    </a>
                                    <div class="episode-time d-flex align-items-center gap-2">
                                        <span class="tcp-1 fs-xl">
                                            <i class="fas fa-clock"></i>
                                        </span>
                                        <span class="fs-lg fw-medium text-nowrap">
                                            Conversaciones profundas
                                        </span>
                                    </div>
                                </div>
                                <div class="record-img d-none d-sm-block">
                                    <div class="record-img-animation d-flex height-46">
                                        <img class="w-100" src="{{ asset('assets/img/record.png') }}" alt="image">
                                        <img class="w-100" src="{{ asset('assets/img/record.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                            <h3 class="card-title fw-semibold mb-4">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-text">
                                    Voces que hacen cultura: historias, trayectorias y verdad detrás del escenario
                                </a>
                            </h3>
                            <p class="fs-sm">
                                No se trata solo de entrevistar. Se trata de dar lugar a quienes tienen algo genuino para contar.
                            </p>
                            <div class="card-btns d-between flex-wrap flex-sm-nowrap gap-6 mt-lg-8 mt-6">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="icon-btn d-center gap-3">
                                    <span class="icon fs-xl fw-bold">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <span class="text fw-semibold">
                                        Ver contenido
                                    </span>
                                </a>

                            </div>
                        </div>
                        <div class="episode-card small-card p-xxl-10 p-6 bgc-2 rounded" data-aos="fade-right">
                            <div class="card-top d-between gap-xxl-6 gap-4 mb-6">
                                <div class="d-flex align-items-center gap-sm-4 gap-2 flex-wrap flex-sm-nowrap">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                        <span class="tcp-1 fs-xl">
                                            <i class="fas fa-microphone"></i>
                                        </span>
                                        <span class="fs-lg fw-medium text-nowrap link-text">
                                            Comunidad ritualera
                                        </span>
                                    </a>
                                    <div class="episode-time d-flex align-items-center gap-2">
                                        <span class="tcp-1 fs-xl">
                                            <i class="fas fa-clock"></i>
                                        </span>
                                        <span class="fs-lg fw-medium text-nowrap">
                                            En cada transmisión
                                        </span>
                                    </div>
                                </div>
                                <div class="record-img d-none d-sm-block">
                                    <div class="record-img-animation d-flex height-46">
                                        <img class="w-100" src="{{ asset('assets/img/record.png') }}" alt="image">
                                        <img class="w-100" src="{{ asset('assets/img/record.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                            <h3 class="card-title fw-semibold mb-4">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-text">
                                    Un espacio para comentar, compartir y sentir que del otro lado hay personas de verdad
                                </a>
                            </h3>
                            <p class="fs-sm">
                                Bohemio Ritual no apunta a una audiencia pasiva. Apunta a construir una comunidad con identidad, memoria y pertenencia.
                            </p>
                            <div class="card-btns d-between flex-wrap flex-sm-nowrap gap-6 mt-lg-8 mt-6">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="icon-btn d-center gap-3">
                                    <span class="icon fs-xl fw-bold">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <span class="text fw-semibold">
                                        Sumate al canal
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-wave-shape">
            <img class="w-100" src="{{ asset('assets/img/bottom-wave-shape.png') }}" alt="wave shape">
        </div>
    </section>

    <section class="about-section texture-bg" id="about-bohemio">
        <div class="top-wave-shape mt-n1">
            <img class="w-100" src="{{ asset('assets/img/top-wave-shape.png') }}" alt="wave shape">
        </div>
        <div class="sun-shape sun-shape-4 d-none d-md-block">
            <img src="{{ asset('assets/img/sun.png') }}" alt="sun">
        </div>
        <div class="sun-shape sun-shape-5 d-none d-md-block">
            <img src="{{ asset('assets/img/sun.png') }}" alt="sun">
        </div>
        <div class="container pt-120 pb-120">
            <div class="row g-6 justify-content-between">
                <div class="col-xxl-6 col-lg-7" data-aos="fade-up-left">
                    <div class="About-us-content text-center text-lg-start">
                        <span class="subheading-border fw-medium mb-4 fs-xl">
                            <span class="fs-2xl">
                                <i class="fas fa-rocket"></i>
                            </span>
                            Sobre Bohemio Ritual
                        </span>
                        <h4 class="display-four fw-bold mb-6 pe-xxl-2">
                            Un canal de streaming con raíz argentina con mucha música
                        </h4>
                        <p class="fw-normal">
                            Bohemio Ritual nace para compartir folklore argentino, entrevistas a artistas, comentarios entre participantes,
                            momentos espontáneos y una estética que mezcla tradición con un formato moderno de streaming.
                        </p>
                        <div class="our-feature-list mt-lg-10 mt-sm-8 mt-6">
                            <ul class="d-between flex-wrap gap-lg-4 gap-3 fs-xl fw-medium fill-check-box">
                                <li>Folklore y tradición</li>
                                <li>Charlas auténticas</li>
                                <li>Invitados y artistas</li>
                                <li>Comunidad con identidad</li>
                            </ul>
                        </div>
                        <span class="d-block border-dashed mt-lg-8 mt-4 mb-lg-10 mb-sm-8 mb-6"></span>
                        <div class="about-us-btns d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-center justify-content-lg-start gap-xxl-10 gap-4">
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="bttn-1 text-nowrap">
                                Suscribite ahora
                                <span class="icon d-center icon-right">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                            <div class="listen-to-btns d-flex flex-wrap align-items-center gap-xl-4 gap-2">
                                <p class="fs-lg fw-medium">Encontranos en</p>
                                <ul class="d-flex align-items-center gap-sm-3 gap-2">
                                    <li class="brand-icon alt">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/youtube-icon.png') }}" alt="YouTube">
                                </a>
                            </li>
                            <li class="brand-icon alt">
                                <a href="https://www.instagram.com/bohemioritual/" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/instagram-icon.png') }}" alt="Canal oficial">
                                </a>
                            </li>
                            <li class="brand-icon alt">
                                <a href="http://wa.me/5493815355966" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="Bohemio Ritual">
                                </a>
                            </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-down-left">
                    <div class="about-us-banner-wrapper d-flex justify-content-center mt-4 mt-lg-0 position-relative">

                        <div class="about-us-banner-1 position-relative" style="max-width: 940px; width: 100%;">
                            <img class="w-100 rounded" src="{{ asset('assets/img/bohemio-logo.png') }}" alt="Bohemio Ritual">

                            <div class="online-play position-absolute">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/play.png') }}" alt="Ver Bohemio Ritual">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-wave-shape">
            <img class="w-100" src="{{ asset('assets/img/bottom-wave-shape.png') }}" alt="wave shape">
        </div>
    </section>

    <section class="pricing-plan-section pt-120 pb-120 texture-bg-2">
        <div class="container">
            <div class="row justify-content-center mb-lg-10 mb-sm-8 mb-6">
                <div class="col-lg-8">
                    <div class="text-center">
                        <span class="subheading-border fw-medium mb-4 fs-xl">
                            <span class="fs-2xl">
                                <i class="fas fa-microphone-2"></i>
                            </span>
                            ¿Querés ser parte?
                        </span>
                        <h4 class="display-four fw-bold">
                            Mostrá tu talento en Bohemio Ritual
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-6">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="pricing-card py-lg-8 py-6 px-xxl-10 px-xl-8 px-6 bcp-1-2 rounded" style="min-height: 100%; box-shadow: 0 20px 60px rgba(0,0,0,.25);">
                        <div class="d-between flex-wrap gap-3 mb-3">
                            <span class="package-type fs-four fw-bold tcn-700">Convocatoria abierta</span>
                            <div class="record-img" style="max-width: 140px;">
                                <img class="w-100" src="{{ asset('assets/img/record-2.png') }}" alt="record icon">
                            </div>
                        </div>

                        <div class="d-flex align-items-end gap-2 mb-4">
                            <span class="package-price monthly-price display-four tcn-700">EN VIVO</span>
                        </div>

                        <p class="tcn-700 fs-lg mb-0" style="line-height: 1.7;">
                            Si hacés música, cantás, tocás un instrumento, tenés un proyecto artístico o simplemente querés compartir lo que hacés,
                            este espacio puede ser para vos. En <strong>Bohemio Ritual</strong> queremos darle lugar a nuevas voces, artistas y propuestas
                            que tengan algo genuino para mostrar.
                        </p>

                        <div class="border-dashed alt my-lg-8 my-sm-6 my-4"></div>

                        <ul class="package-feature d-grid gap-lg-6 gap-sm-4 gap-2 fs-lg fw-medium tcn-700 fill-check-box alt-size alt-color">
                            <li>Presentá tu música o proyecto en vivo</li>
                            <li>Difundí tu talento ante una nueva audiencia</li>
                            <li>Compartí tu historia, tu arte y tu identidad</li>
                            <li>Participá de charlas, folklore y encuentros</li>
                            <li>Sumate como invitado/a al programa</li>
                            <li>Contacto directo y simple por WhatsApp</li>
                        </ul>

                        <div class="border-dashed alt my-lg-8 my-sm-6 my-4"></div>

                        <a href="https://wa.me/5493815355966?text=Hola%20Bohemio%20Ritual%2C%20quiero%20participar%20del%20programa%20y%20compartir%20mi%20m%C3%BAsica%20o%20proyecto." target="_blank" rel="noopener noreferrer" class="bttn-1 bttn-fill fill-alt w-100" style="justify-content: center;">
                            Escribinos por WhatsApp
                            <span class="icon d-center icon-right">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-listens-list-02 texture-bg" id="top-shows">
        <div class="top-wave-shape mt-n1">
            <img class="w-100" src="{{ asset('assets/img/top-wave-shape.png') }}" alt="wave shape">
        </div>
        <div class="top-listens-list-wrapper pt-120 pb-120">
            <div class="container mb-lg-15 mb-sm-10 mb-8">
                <div class="row align-items-center g-6" data-aos="flip-left">
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start">
                            <span class="subheading-border fw-medium mb-4 fs-xl">
                                <span class="fs-2xl">
                                    <i class="fas fa-rocket"></i>
                                </span>
                                Nuestro Estúdio
                            </span>
                            <span class="display-four">Compartiendo el Ritual con amigos</span>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="swiper-btns swiper-top-btn d-flex align-items-center justify-content-end gap-4">
                            <div class="top-listens-2-prev button-prev fs-lg">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="top-listens-2-next button-next fs-lg">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="swiper top-listens-02" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-5.png') }}" alt="Charlas">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">Cancion del Río</h4>
                                        <a href="https://youtu.be/pUsEY8Z8qOk?si=Tkqs81zGIolFQMXh" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/pUsEY8Z8qOk?si=KcxTSKUhmhRpw9pO" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">3:07</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Ver canal</a>
                                    <span class="tag-btn">Mesa</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-6.png') }}" alt="Entrevistas">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">Mientras Bailas</h4>
                                        <a href="https://youtu.be/MU5CiKWqT10?si=ZEH142g0iamud1B7" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/MU5CiKWqT10?si=ZEH142g0iamud1B7" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">4:13</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Suscribite</a>
                                    <span class="tag-btn">Artistas</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-7.png') }}" alt="Folklore">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">Horizonte de Octubre</h4>
                                        <a href="https://youtu.be/bsWm61cMoGs?si=DuyU7c3RqjmBvb5E" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/bsWm61cMoGs?si=DuyU7c3RqjmBvb5E" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">4:31</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Ir al canal</a>
                                    <span class="tag-btn">Folklore</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-8.png') }}" alt="Folklore">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">Jazmin de Luna</h4>
                                        <a href="https://youtu.be/mx0XCCpkMjw?si=HXojZNAu9GfS2rGp" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/mx0XCCpkMjw?si=HXojZNAu9GfS2rGp" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">4:31</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Ir al canal</a>
                                    <span class="tag-btn">Folklore</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-1.png') }}" alt="Folklore">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">Zona de Promesas</h4>
                                        <a href="https://youtu.be/hzMaO1RzSck?si=okYDnLRBr5xjdz9H" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/hzMaO1RzSck?si=okYDnLRBr5xjdz9H" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">3:27</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Ir al canal</a>
                                    <span class="tag-btn">Folklore</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-2.png') }}" alt="Folklore">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">No Deberías</h4>
                                        <a href="https://youtu.be/sAAJL0f__Y8?si=dCFHifJb5Z6RuNuy" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/sAAJL0f__Y8?si=dCFHifJb5Z6RuNuy" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">3:30</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Ir al canal</a>
                                    <span class="tag-btn">Folklore</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-show-card p-xxl-8 p-6 rounded">
                                <div class="d-flex align-items-sm-center flex-column flex-sm-row gap-xxl-8 gap-xl-6 gap-4">
                                    <div class="img-area">
                                        <img class="w-100 rounded" src="{{ asset('assets/img/shows-3.png') }}" alt="Folklore">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="show-title mb-4 fw-semibold">Chacarera del 55</h4>
                                        <a href="https://youtu.be/zbP6xxZGXYw?si=tBH8uMiVcrLsrccr" target="_blank" rel="noopener noreferrer" class="episode-host d-flex align-items-center gap-2">
                                            <span class="tcp-1"><i class="fas fa-microphone"></i></span>
                                            <span class="fs-lg fw-medium link-text">Estudio Bohemio Ritual</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="play-podcast-area my-lg-8 my-sm-6 my-4">
                                    <div class="audio-player">
                                        <div class="play-audio">
                                            <a href="https://youtu.be/zbP6xxZGXYw?si=tBH8uMiVcrLsrccr" target="_blank" rel="noopener noreferrer" class="toggle-play play fs-xl tcn-900">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="controls">
                                            <div class="timeline mb-2"><div class="progress"></div></div>
                                            <div class="time-and-volume">
                                                <div class="time">
                                                    <div class="current fs-sm">4:31</div>
                                                    <div class="length fs-sm"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button"><i class="fas fa-volume-up"></i></div>
                                                    <div class="volume-slider"><div class="volume-percentage"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-between">
                                    <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="link-btn">Ir al canal</a>
                                    <span class="tag-btn">Folklore</span>
                                </div> --}}
                            </div>
                        </div>

                    </div>

                    <div class="mt-lg-10 mt-8 text-center">
                        <div class="top-listens-2-swiper-pagination d-none d-lg-block custom-swiper-pagination"></div>
                        <div class="swiper-btns swiper-bottom-btn d-flex d-lg-none align-items-center justify-content-center gap-4">
                            <div class="top-listens-2-prev button-prev fs-lg">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="top-listens-2-next button-next fs-lg">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-wave-shape">
            <img class="w-100" src="{{ asset('assets/img/bottom-wave-shape.png') }}" alt="wave shape">
        </div>
    </section>

    <section class="testimonial-section-02 pt-120 pb-120 texture-bg-2" id="testimonios">
        <div class="sun-shape sun-shape-4 d-none d-md-block">
            <img src="{{ asset('assets/img/sun.png') }}" alt="sun">
        </div>
        <div class="sun-shape sun-shape-5 d-none d-md-block">
            <img src="{{ asset('assets/img/sun.png') }}" alt="sun">
        </div>
        <div class="container">
            <div class="row align-items-center mb-lg-15 mb-sm-10 mb-8" data-aos="flip-left">
                <div class="col-lg-8">
                    <div class="text-center text-lg-start">
                        <span class="subheading-border fw-medium mb-4 fs-xl">
                            <span class="fs-2xl">
                                <i class="fas fa-rocket"></i>
                            </span>
                            Comunidad
                        </span>
                        <span class="display-four">Lo que transmite Bohemio Ritual en su audiencia</span>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="swiper-btns swiper-top-btn d-flex align-items-center justify-content-end gap-4">
                        <div class="ts-swiper-2-prev button-prev fs-lg"><i class="fas fa-chevron-left"></i></div>
                        <div class="ts-swiper-2-next button-next fs-lg"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="swiper testimonial-swiper-2" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card d-flex flex-column flex-sm-row align-items-center gap-xxl-10 gap-xl-8 gap-sm-4 gap-2 p-xxl-8 p-xl-6 p-4 bgc-2 rounded">
                            <div class="img-wrapper d-flex gap-xl-6 gap-2">
                                <div class="position-relative d-flex flex-lg-column flex-row">
                                    <div class="ts-user rounded-circle">
                                        <img class="w-100 rounded-circle" src="{{ asset('assets/img/ts-user.png') }}" alt="comentario">
                                    </div>
                                    <div class="record-shape">
                                        <img class="w-100" src="{{ asset('assets/img/record-5.png') }}" alt="record">
                                    </div>
                                </div>
                                <div class="vl-shape d-none d-sm-block">
                                    <img class="w-100 h-100" src="{{ asset('assets/img/vl-shape.png') }}" alt="vl-shape">
                                </div>
                            </div>
                            <div class="content-area text-center text-sm-start">
                                <ul class="rating-list d-flex justify-content-center justify-content-sm-start gap-lg-2 gap-1 tcp-1 mb-lg-4 mb-2">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                                <p class="quote-text fs-xl mb-4">
                                    “No se siente como un contenido armado. Se siente como estar presente en una charla que vale la pena escuchar.”
                                </p>
                                <div class="d-between justify-content-center justify-content-sm-between bt-2 pt-lg-6 pt-4">
                                    <div class="user-info">
                                        <h4 class="user-name fw-semibold mb-2">Seguidores del canal</h4>
                                        <span class="user-position">Comunidad ritualera</span>
                                    </div>
                                    <div class="quote-icon d-none d-sm-block">
                                        <img class="w-100" src="{{ asset('assets/img/quote.png') }}" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card d-flex flex-column flex-sm-row align-items-center gap-xxl-10 gap-xl-8 gap-sm-4 gap-2 p-xxl-8 p-xl-6 p-4 bgc-2 rounded">
                            <div class="img-wrapper d-flex gap-xl-6 gap-2">
                                <div class="position-relative d-flex flex-lg-column flex-row">
                                    <div class="ts-user rounded-circle">
                                        <img class="w-100 rounded-circle" src="{{ asset('assets/img/ts-user-2.png') }}" alt="comentario">
                                    </div>
                                    <div class="record-shape">
                                        <img class="w-100" src="{{ asset('assets/img/record-5.png') }}" alt="record">
                                    </div>
                                </div>
                                <div class="vl-shape d-none d-sm-block">
                                    <img class="w-100 h-100" src="{{ asset('assets/img/vl-shape.png') }}" alt="vl-shape">
                                </div>
                            </div>
                            <div class="content-area text-center text-sm-start">
                                <ul class="rating-list d-flex justify-content-center justify-content-sm-start gap-lg-2 gap-1 tcp-1 mb-lg-4 mb-2">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                                <p class="quote-text fs-xl mb-4">
                                    “Tiene algo que hoy escasea: identidad. No intenta copiar, intenta construir su propia mística.”
                                </p>
                                <div class="d-between justify-content-center justify-content-sm-between bt-2 pt-lg-6 pt-4">
                                    <div class="user-info">
                                        <h4 class="user-name fw-semibold mb-2">Audiencia en crecimiento</h4>
                                        <span class="user-position">Valoración del proyecto</span>
                                    </div>
                                    <div class="quote-icon d-none d-sm-block">
                                        <img class="w-100" src="{{ asset('assets/img/quote.png') }}" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card d-flex flex-column flex-sm-row align-items-center gap-xxl-10 gap-xl-8 gap-sm-4 gap-2 p-xxl-8 p-xl-6 p-4 bgc-2 rounded">
                            <div class="img-wrapper d-flex gap-xl-6 gap-2">
                                <div class="position-relative d-flex flex-lg-column flex-row">
                                    <div class="ts-user rounded-circle">
                                        <img class="w-100 rounded-circle" src="{{ asset('assets/img/ts-user.png') }}" alt="comentario">
                                    </div>
                                    <div class="record-shape">
                                        <img class="w-100" src="{{ asset('assets/img/record-5.png') }}" alt="record">
                                    </div>
                                </div>
                                <div class="vl-shape d-none d-sm-block">
                                    <img class="w-100 h-100" src="{{ asset('assets/img/vl-shape.png') }}" alt="vl-shape">
                                </div>
                            </div>
                            <div class="content-area text-center text-sm-start">
                                <ul class="rating-list d-flex justify-content-center justify-content-sm-start gap-lg-2 gap-1 tcp-1 mb-lg-4 mb-2">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                                <p class="quote-text fs-xl mb-4">
                                    “La mezcla de folklore, charla y cercanía le da una personalidad que no se siente impostada.”
                                </p>
                                <div class="d-between justify-content-center justify-content-sm-between bt-2 pt-lg-6 pt-4">
                                    <div class="user-info">
                                        <h4 class="user-name fw-semibold mb-2">Seguidores nuevos</h4>
                                        <span class="user-position">Primera impresión real</span>
                                    </div>
                                    <div class="quote-icon d-none d-sm-block">
                                        <img class="w-100" src="{{ asset('assets/img/quote.png') }}" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card d-flex flex-column flex-sm-row align-items-center gap-xxl-10 gap-xl-8 gap-sm-4 gap-2 p-xxl-8 p-xl-6 p-4 bgc-2 rounded">
                            <div class="img-wrapper d-flex gap-xl-6 gap-2">
                                <div class="position-relative d-flex flex-lg-column flex-row">
                                    <div class="ts-user rounded-circle">
                                        <img class="w-100 rounded-circle" src="{{ asset('assets/img/ts-user-2.png') }}" alt="comentario">
                                    </div>
                                    <div class="record-shape">
                                        <img class="w-100" src="{{ asset('assets/img/record-5.png') }}" alt="record">
                                    </div>
                                </div>
                                <div class="vl-shape d-none d-sm-block">
                                    <img class="w-100 h-100" src="{{ asset('assets/img/vl-shape.png') }}" alt="vl-shape">
                                </div>
                            </div>
                            <div class="content-area text-center text-sm-start">
                                <ul class="rating-list d-flex justify-content-center justify-content-sm-start gap-lg-2 gap-1 tcp-1 mb-lg-4 mb-2">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                                <p class="quote-text fs-xl mb-4">
                                    “Cuando un canal tiene verdad, se nota. Y acá hay una búsqueda clara de identidad cultural y humana.”
                                </p>
                                <div class="d-between justify-content-center justify-content-sm-between bt-2 pt-lg-6 pt-4">
                                    <div class="user-info">
                                        <h4 class="user-name fw-semibold mb-2">Comunidad del proyecto</h4>
                                        <span class="user-position">Acompañando el crecimiento</span>
                                    </div>
                                    <div class="quote-icon d-none d-sm-block">
                                        <img class="w-100" src="{{ asset('assets/img/quote.png') }}" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-lg-10 mt-8 text-center">
                    <div class="swiper-btns swiper-bottom-btn d-flex d-lg-none align-items-center justify-content-center gap-4">
                        <div class="ts-swiper-2-prev button-prev fs-lg"><i class="fas fa-chevron-left"></i></div>
                        <div class="ts-swiper-2-next button-next fs-lg"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-letter-section-02 texture-bg" id="newsletter-02">
        <div class="top-wave-shape mt-n1">
            <img class="w-100" src="{{ asset('assets/img/top-wave-shape.png') }}" alt="wave shape">
        </div>
        <div class="container pt-120 pb-120">
            <div class="row g-sm-6 g-2">
                <div class="col-lg-8">
                    <h3 class="display-four">Recibí novedades, próximos vivos y artistas invitados</h3>
                </div>
                <div class="col-lg-4">
                    <div class="input-area alt">
                        <input type="email" class="py-1" placeholder="Dejá tu email">
                        <button class="icon-btn">
                            <span class="icon alt-size fs-xl fw-bold">
                                <i class="fas fa-paper-plane"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section texture-bg">
        <div class="container">
            <div class="row g-6 pb-120" data-aos="fade-up">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-logo mb-lg-6 mb-4">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Bohemio Ritual">
                        </a>
                    </div>
                    <span class="d-block mb-lg-8 mb-sm-6 mb-4 me-xxl-6">
                        Bohemio Ritual es un canal de streaming enfocado en folklore argentino, charlas con identidad, artistas invitados y una comunidad que valora lo auténtico.
                    </span>
                    <ul class="footer-social d-flex align-items-center gap-3 fs-xl">
                        <li>
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="widget-title mb-lg-6 mb-4 fw-semibold">Secciones</h4>
                        <ul class="footer-menu d-grid gap-3">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><a href="#about-bohemio">Sobre el canal</a></li>
                            <li><a href="#recentes">Contenido reciente</a></li>
                            <li><a href="#top-shows">Programas destacados</a></li>
                            <li><a href="#testimonios">Comunidad</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="widget-title mb-lg-6 mb-4 fw-semibold">Canal oficial</h4>
                        <ul class="footer-menu d-grid gap-3">
                            <li>
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-3 alt">
                                    <span class="tcp-1 fs-xl">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                    @BohemioRitual
                                </a>
                            </li>
                            <li>
                                <span class="d-flex align-items-center gap-3 alt">
                                    <span class="tcp-1 fs-xl"><i class="fas fa-music"></i></span>
                                    Streaming de folklore, charlas y artistas
                                </span>
                            </li>
                            <li>
                                <span class="d-flex align-items-center gap-3 alt">
                                    <span class="tcp-1 fs-xl"><i class="fas fa-map-marker-alt"></i></span>
                                    Argentina
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="widget-title mb-lg-6 mb-4 fw-semibold">Suscribite</h4>
                        <span class="d-block mb-lg-6 mb-4">
                            No dejes pasar el crecimiento del canal. Entrá a YouTube, suscribite y acompañá cada nueva transmisión de Bohemio Ritual.
                        </span>
                        <ul class="d-flex align-items-center gap-xl-4 gap-2">
                            <li class="brand-icon alt">
                                <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/youtube-icon.png') }}" alt="YouTube">
                                </a>
                            </li>
                            <li class="brand-icon alt">
                                <a href="https://www.instagram.com/bohemioritual/" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/instagram-icon.png') }}" alt="Canal oficial">
                                </a>
                            </li>
                            <li class="brand-icon alt">
                                <a href="http://wa.me/5493815355966" target="_blank" rel="noopener noreferrer">
                                    <img class="w-100" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="Bohemio Ritual">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom d-between flex-wrap-reverse gap-2 py-lg-8 py-sm-6 py-4 bt-2">
                <div class="footer-copyright-nerdostech">
                    <span>
                        Copyright © <span class="currentYear"></span>
                        <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer" class="tcp-1 link-text-2">
                            Bohemio Ritual
                        </a>
                        Todos los derechos reservados.
                    </span>

                    <div class="developed-by-nerdostech">
                        <span>Sitio desarrollado por</span>
                        <a href="https://nerdostech.com/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/img/nedostech.png') }}" alt="NerdosTech Solutions">
                            <strong>NerdosTech Solutions</strong>
                        </a>
                    </div>
                </div>

                <div class="record-slide-wrapper d-none d-lg-block">
                    <div class="record-img-animation d-flex align-items-center">
                        <img class="w-100" src="{{ asset('assets/img/record-4.png') }}" alt="record">
                        <img class="w-100" src="{{ asset('assets/img/record-4.png') }}" alt="record">
                        <img class="w-100" src="{{ asset('assets/img/record-4.png') }}" alt="record">
                    </div>
                </div>

                <div class="footer-widget">
                    <ul class="footer-menu d-flex gap-lg-6 gap-sm-4 gap-2 fw-normal">
                        <li>
                            <a href="https://www.youtube.com/@BohemioRitual" target="_blank" rel="noopener noreferrer">
                                Canal oficial
                            </a>
                        </li>
                        <li>
                            <a href="#newsletter-02">Novedades</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

