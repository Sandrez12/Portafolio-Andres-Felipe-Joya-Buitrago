<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Andrés Felipe Joya Buitrago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        #sidebar-wrapper {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>
<p>Idioma actual: {{ app()->getLocale() }}</p>

<button id="toggle-sidebar" class="btn btn-light position-fixed top-0 start-0 m-2 d-none d-md-block" style="z-index: 1060;">
    <i class="bi bi-list fs-3 text-dark"></i>
</button>

<!-- Partículas -->
<div id="particles-js"></div>

<!-- Sidebar -->
<nav  id="sidebar-wrapper" class="d-none d-md-flex position-fixed top-0 start-0 p-3 text-white flex-column justify-content-between shadow-lg"
     style="width: 300px; height: 100vh; z-index: 1050; border-radius: 1rem; background: rgba(33, 37, 41, 0.85); backdrop-filter: blur(8px);">

    <div id="sidebar-wrapper" class="d-flex flex-column position-fixed top-0 start-0 p-3 text-white shadow-lg"
     style="width: 300px; height: 100vh; z-index: 10; border-radius: 1rem; background: rgba(33, 37, 41, 0.85); backdrop-filter: blur(8px); transition: transform 0.3s ease;">

        <!-- Logo -->
        <div class="text-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo de Andrés Joya"
                    class="rounded-circle border border-3 shadow mb-3"
                    style="max-width: 100px; border-color: #6c63ff;">
            </a>
        </div>

        <!-- Navegación con íconos -->
        <ul class="nav flex-column text-start px-2">
            <li class="nav-item mb-2">
                <a href="{{ route('home') }}" class="nav-link text-white d-flex align-items-center gap-2">
                    <i class="bi bi-house-door-fill"></i> {{ __('nav.home') }}
                </a>
            </li>
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

            <li class="nav-item">
                <a href="#education" class="nav-link text-white">
                    <i class="bi bi-mortarboard-fill me-2"></i>{{ __('nav.education') }}
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
        <div class="d-flex justify-content-around mt-3">
            <a href="https://github.com/Sandrez12" target="_blank" class="text-white fs-4 me-3">
                <i class="devicon-github-original"></i>
            </a>
            <a href="https://www.linkedin.com/in/andres-joya-69a552357/" target="_blank" class="text-white fs-4">
                <i class="bi bi-linkedin"></i>
            </a>
        </div>
    </div>    
</nav>

    <!-- Sidebar móvil (offcanvas) -->
    <div class="offcanvas offcanvas-start text-bg-dark d-md-none" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileSidebarLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Mismo contenido del sidebar, adaptado si es necesario -->
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="{{ route('home') }}" class="nav-link text-white d-flex align-items-center gap-2">
                        <i class="bi bi-house-door-fill"></i> {{ __('nav.home') }}
                    </a>
                </li>
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

                <li class="nav-item">
                    <a href="#education" class="nav-link text-white">
                        <i class="bi bi-mortarboard-fill me-2"></i>{{ __('nav.education') }}
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
                <!-- ... etc ... -->
            </ul>
        </div>
    </div>

<!-- Botón menú solo visible en móviles -->
<button class="btn btn-outline-light d-md-none position-fixed top-0 start-0 m-2 z-3" 
        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" 
        aria-controls="mobileSidebar">
    <i class="bi bi-list fs-3"></i>
</button>

<!-- Contenido -->
<main id="main-content" class="content-wrapper" style="margin-left: 300px; transition: margin 0.3s ease;">
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
    particlesJS('particles-js', {
        "particles": {
            "number": {
                "value": 100,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle"
            },
            "opacity": {
                "value": 0.5,
                "random": false
            },
            "size": {
                "value": 3,
                "random": true
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 2,
                "direction": "none",
                "out_mode": "out"
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false
                },
                "resize": true
            },
            "modes": {
                "repulse": {
                    "distance": 100
                }
            }
        },
        "retina_detect": true
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
        const toggleBtn = document.getElementById('toggle-sidebar');
    const sidebar = document.getElementById('sidebar-wrapper');
    const mainContent = document.getElementById('main-content');

    let sidebarVisible = true;

    toggleBtn.addEventListener('click', () => {
        if (sidebarVisible) {
            sidebar.style.transform = 'translateX(-100%)';
            mainContent.style.marginLeft = '0';
        } else {
            sidebar.style.transform = 'translateX(0)';
            mainContent.style.marginLeft = '300px';
        }
        sidebarVisible = !sidebarVisible;
    });
</script>


<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
</script>

<footer class="text-center text-light py-3 mt-5">
    <small>
        © {{ date('Y') }} Andrés Felipe Joya Buitrago —
        <a href="https://github.com/Sandrez12" target="_blank" class="text-decoration-none text-light">
            GitHub
        </a> | 
        <a href="https://www.linkedin.com/in/andres-joya-69a552357/" target="_blank" class="text-decoration-none text-light">
            LinkedIn
        </a>
    </small>
</footer>

</body>
</html>
