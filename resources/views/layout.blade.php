<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Andrés Felipe Joya Buitrago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <!-- Fuentes y estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
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
        .content-wrapper {
            position: relative;
            z-index: 1;
        }
        .language-switcher {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
        }
    </style>
</head>
<body>

<!-- Fondo partículas -->
<div id="particles-js"></div>

<!-- Idioma -->
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

<!-- Contenido principal -->
<div class="content-wrapper">
    @yield('content')
</div>

<!-- Footer -->
<footer class="text-center text-light py-3 mt-5">
    <small>
        © {{ date('Y') }} Andrés Felipe Joya Buitrago — 
        <a href="https://github.com/Sandrez12" target="_blank" class="text-decoration-none text-light">GitHub</a> | 
        <a href="https://www.linkedin.com/in/andres-joya-69a552357/" target="_blank" class="text-decoration-none text-light">LinkedIn</a>
    </small>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
    particlesJS.load('particles-js', '{{ asset('particles.json') }}', function() {
        console.log('particles.js loaded');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>GLightbox({ selector: '.glightbox' });</script>

</body>
</html>
