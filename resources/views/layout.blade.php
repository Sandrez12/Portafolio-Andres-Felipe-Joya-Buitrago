<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Andrés Felipe Joya Buitrago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
        section#hero {
            background: linear-gradient(145deg, #1f1c2c, #2a0845);
            padding: 100px 0;
        }

        img.rounded-circle {
            border: 4px solid #fff;
            object-fit: cover;
            object-position: center;
        }


        #particles-js {
            z-index: 0;
        }
        section {
            scroll-margin-top: 70px; /* Para que el navbar no tape los anclajes */
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .nav-link {
            transition: all 0.3s ease;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            background-color: rgba(108, 99, 255, 0.2); /* color semitransparente */
            color: #6c63ff !important; /* color principal */
            transform: translateX(5px); /* efecto de desplazamiento sutil */
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
        section.section-glass {
            background: rgba(255, 255, 255, 0.05); /* blanco muy transparente */
            border-radius: 1rem;
            backdrop-filter: blur(8px); /* difuminado de fondo tipo "glassmorphism" */
            -webkit-backdrop-filter: blur(8px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
            padding: 60px 40px;
            margin-bottom: 60px;
            color: white;
        }
        .skill-card {
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 15px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            backdrop-filter: blur(6px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
        }
        .skill-card:hover {
            transform: translateY(-5px);
            background-color: rgba(255, 255, 255, 0.1);
        }
        .project-card {
            background: rgba(255, 255, 255, 0.07);
            border-radius: 15px;
            backdrop-filter: blur(8px);
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.3);
            color: white;
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-5px);
        }
        .nested-swiper img {
            max-height: 250px;
            object-fit: contain;
            width: 100%;
            margin: auto;
            border-radius: 10px;
        }
        .service-card {
            background: rgba(255, 255, 255, 0.06);
            border-radius: 15px;
            backdrop-filter: blur(8px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<!-- Partículas -->
<div id="particles-js"></div>

<!-- Sidebar -->
<nav class="position-fixed top-0 start-0 p-3 text-white d-flex flex-column justify-content-between shadow-lg"
     style="width: 300px; height: 100vh; z-index: 10; border-radius: 1rem; background: rgba(33, 37, 41, 0.85); backdrop-filter: blur(8px);">

    <!-- Logo -->
    <div class="text-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo de Andrés Joya"
                class="rounded-circle border border-3 shadow mb-3"
                style="max-width: 100px; border-color: #6c63ff;">
        </a>
    </div>

    <!-- Navegación con íconos -->
    <ul class="nav flex-column text-start px-2">
        <li class="nav-item mb-2">
            <a href="#about" class="nav-link text-white d-flex align-items-center gap-2">
                <i class="bi bi-person-circle"></i> {{ __('nav.about') }}
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#skills" class="nav-link text-white d-flex align-items-center gap-2">
                <i class="bi bi-tools"></i> {{ __('nav.skills') }}
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#projects" class="nav-link text-white d-flex align-items-center gap-2">
                <i class="bi bi-folder2-open"></i> {{ __('nav.projects') }}
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#services" class="nav-link text-white d-flex align-items-center gap-2">
                <i class="bi bi-briefcase-fill"></i> {{ __('nav.services') }}
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#contact" class="nav-link text-white d-flex align-items-center gap-2">
                <i class="bi bi-envelope"></i> {{ __('nav.contact') }}
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('home') }}" class="nav-link text-white d-flex align-items-center gap-2">
                <i class="bi bi-house-door-fill"></i> {{ __('nav.home') }}
            </a>
        </li>
    </ul>

    <!-- Idioma -->
    <div class="text-center px-2">
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
