<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portafolio - Andrés Joya')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0d0d2b;
            color: white;
            scroll-behavior: smooth;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100%;
            background: #1a1a2e;
            padding: 1rem;
        }
        .sidebar a {
            display: block;
            color: white;
            margin: 1rem 0;
            text-decoration: none;
        }
        .navbar-custom {
            margin-left: 200px;
            background-color: #0d0d2b;
        }
        main {
            margin-left: 200px;
            padding: 2rem;
        }
        section {
            padding: 4rem 0;
            min-height: 100vh;
        }
        section#about {
            background-color: #161b3d;
            border-radius: 10px;
        }
        section#about h2 {
            font-weight: bold;
            font-size: 2.5rem;
        }
        section#about p, section#about li {
            font-size: 1.1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4>Andrés Joya</h4>
        <a href="#home">Home</a>
        <a href="#about">Sobre mí</a>
        <a href="#skills">Habilidades</a>
        <a href="#projects">Proyectos</a>
        <a href="#services">Servicios</a>
        <a href="#contact">Contacto</a>
    </div>

    <!-- Navbar (opcional superior) -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid justify-content-end pe-4">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">🌐</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/lang/es">Español</a></li>
                        <li><a class="dropdown-item" href="/lang/en">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Partículas -->
    <div id="particles-js" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0;"></div>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <script>
        particlesJS.load('particles-js', '{{ asset('particles.json') }}', () => {
            console.log('Particles loaded');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <style>
        .about-section {
            background: linear-gradient(-45deg, #1f1c2c, #302b63, #24243e, #4a00e0);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            border-radius: 20px;
            box-shadow: 0 0 20px #1e1e5a;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .skills-section {
            background: linear-gradient(135deg, #1f1c2c, #2e2c58, #4a00e0);
            background-size: 300% 300%;
            animation: bgShift 15s ease infinite;
            border-radius: 20px;
        }
        @keyframes bgShift {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        .skill-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }
        .skill-card:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }
        .skills-section {
            background: linear-gradient(135deg, #1f1c2c, #2e2c58, #4a00e0);
            background-size: 300% 300%;
            animation: bgShift 15s ease infinite;
            border-radius: 20px;
        }

        @keyframes bgShift {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        @keyframes growBar {
            from { width: 0%; }
            to { width: 100%; }
        }

        .progress {
            height: 20px;
        }
        section {
            margin-top: 100px;
            margin-bottom: 100px;
            padding-top: 60px;
            padding-bottom: 60px;
            position: relative;
        }

        section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 80px;
            height: 4px;
            background: #ffffff33; /* blanco translúcido */
            transform: translateX(-50%);
            border-radius: 50px;
        }
        .projects-section {
            background: linear-gradient(145deg, #1f1c2c, #2d2a60, #0f2027);
            border-radius: 20px;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .card:hover {
            transform: scale(1.03);
            transition: transform 0.3s ease;
        }

    </style>
</body>
</html>
