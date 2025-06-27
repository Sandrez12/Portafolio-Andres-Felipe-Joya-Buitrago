<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Andrés Joya - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f0c29;
            color: white;
        }
        #particles-js {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%; z-index: 0;
        }
        .content-wrapper {
            position: relative;
            z-index: 1;
        }
        section {
            padding: 100px 0;
        }
        #hero {
            background-color: #1f1c2c;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }

        #particles-js {
            z-index: 0;
        }
        section {
            scroll-margin-top: 70px; /* Para que el navbar no tape los anclajes */
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .nested-swiper .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px; /* o la altura que prefieras */
        }
        .nested-swiper img {
            max-height: 300px;
            width: auto;
            height: auto;
            max-width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            object-fit: contain;
        }
    </style>
</head>
<body>

<!-- Partículas -->
<div id="particles-js"></div>

<!-- Sidebar -->
<nav class="position-fixed top-0 start-0 p-3 bg-dark text-white h-100 d-flex flex-column justify-content-between" style="width: 180px; z-index: 10;">

    <!-- LOGO centrado con marco -->
    <div class="text-center">
        <a href="#hero">
            <img src="{{ asset('images/logo.png') }}" alt="Logo de Andrés Joya"
                class="rounded-circle border border-3 shadow mb-3"
                style="max-width: 100px; border-color: #6c63ff;">
        </a>
    </div>

    <!-- Navegación -->
    <ul class="nav flex-column text-center">
        <li class="nav-item"><a href="#hero" class="nav-link text-white">{{ __('nav.home') }}</a></li>
        <li class="nav-item"><a href="#about" class="nav-link text-white">{{ __('nav.about') }}</a></li>
        <li class="nav-item"><a href="#skills" class="nav-link text-white">{{ __('nav.skills') }}</a></li>
        <li class="nav-item"><a href="#projects" class="nav-link text-white">{{ __('nav.projects') }}</a></li>
        <li class="nav-item"><a href="#services" class="nav-link text-white">{{ __('nav.services') }}</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link text-white">{{ __('nav.contact') }}</a></li>
    </ul>

    <!-- Selector de idioma -->
    <div class="text-center">
        <hr class="text-white">
        <div class="dropdown">
            <button class="btn btn-outline-light dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                🌐 {{ strtoupper(app()->getLocale()) }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('lang.switch', 'es') }}">🇪🇸 Español</a></li>
                <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">🇺🇸 English</a></li>
            </ul>
        </div>
    </div>

</nav>



<!-- Contenido -->
<main class="content-wrapper" style="margin-left: 180px;">
    @yield('content')
</main>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
    particlesJS.load('particles-js', '{{ asset("particles.json") }}', function() {
        console.log('particles.js loaded');
    });
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
    particlesJS.load('particles-js', '{{ asset('particles.json') }}', function() {
        console.log('Particles.js loaded');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    // Slider principal de proyectos
    const projectSwiper = new Swiper('.projectSwiper', {
        loop: false,
        spaceBetween: 30,
        pagination: {
            el: '.projectSwiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.projectSwiper .swiper-button-next',
            prevEl: '.projectSwiper .swiper-button-prev',
        },
    });

    // Sliders internos de imágenes
    const innerSwipers = document.querySelectorAll('.mySwiper');
    innerSwipers.forEach((el) => {
        new Swiper(el, {
            loop: true,
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                clickable: true
            },
        });
    });
</script>

<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
</script>

</body>
</html>
