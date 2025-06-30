<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Andrés Joya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <!-- CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f0c29;
            color: white;
            margin: 0;
            padding: 0;
        }

        #particles-js {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background-color: #0f0c29;
        }

        .language-switcher {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        section {
            padding: 100px 0;
        }

        #hero {
            background: transparent;
            position: relative;
            z-index: 1;
        }

        .glass-box {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }

        img.rounded-circle {
            border: 4px solid #fff;
            object-fit: cover;
            object-position: center;
        }

        .btn-outline-primary {
            border-color: #6c63ff;
            color: #6c63ff;
        }

        .btn-outline-primary:hover {
            background-color: #6c63ff;
            color: white;
        }
    </style>
</head>
<body>

<!-- Fondo partículas -->
<div id="particles-js"></div>

<!-- Selector de idioma -->
<div class="language-switcher">
    <div class="dropdown">
        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
            🌐 {{ strtoupper(app()->getLocale()) }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('lang.switch', 'es') }}">🇪🇸 Español</a></li>
            <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">🇺🇸 English</a></li>
        </ul>
    </div>
</div>

<!-- Sección principal -->
<div class="content-wrapper">
    <section id="hero" class="d-flex align-items-center min-vh-100 text-light text-center position-relative">
        <div class="container" data-aos="fade-up">
            <div class="glass-box mx-auto" style="max-width: 1000px;">
                <img src="{{ asset('images/FotodePerfil.jpg') }}" alt="Foto de Perfil" class="rounded-circle shadow mb-4" width="180">

                <h1 class="display-4 fw-bold mb-3">
                    {{ __('home.title') }}
                </h1>

                <p class="lead mb-4">
                    {{ __('home.subtitle') }}
                </p>

                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ asset('cv/CV-Andres-Felipe-Joya-Buitrago.pdf') }}" class="btn btn-outline-light btn-lg px-4" download>
                        {{ __('home.cv_button') }}
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline-primary btn-lg px-4">
                        {{ __('home.about_button') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

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
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>
</html>
