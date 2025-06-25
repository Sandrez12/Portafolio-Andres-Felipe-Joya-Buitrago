@extends('layout')

@section('title', __('nav.about'))

@section('content')
<section id="about" class="about-section text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- FOTO -->
            <div class="col-md-5 text-center mb-4 mb-md-0" data-aos="fade-up-right">
                <img src="{{ asset('images/FotodePerfil2.jpg') }}" alt="Foto de perfil" class="img-fluid rounded-circle shadow-lg border border-4 border-light" style="max-width: 280px;">
            </div>

            <!-- TEXTO -->
            <div class="col-md-7" data-aos="fade-up-left">
                <h2 class="mb-4 animate__animated animate__fadeInDown">👨‍💻 Sobre mí</h2>
                <p class="lead">
                    ¡Hola! Soy <strong>Andrés Felipe Joya Buitrago</strong>, Ingeniero en Sistemas con enfoque en desarrollo web y móvil. Me apasiona crear soluciones útiles, con buen diseño, optimizadas y mantenibles. 
                </p>
                <ul class="list-unstyled mt-4 fs-5">
                    <li><strong>📍 Ubicación:</strong> Bucaramanga, Colombia</li>
                    <li><strong>🎓 Formación:</strong> Ingeniero en Sistemas</li>
                    <li><strong>🗣️ Idiomas:</strong> Español, Inglés</li>
                    <li><strong>💼 Rol:</strong> Desarrollador Fullstack</li>
                </ul>
                <a href="{{ asset('cv/CV-Andres-Felipe-Joya-Buitrago.pdf') }}" class="btn btn-outline-light mt-4" download>
                    📄 Descargar CV
                </a>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="skills-section py-5 text-white">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">⚙️ Habilidades</h2>

        <div class="row g-4 justify-content-center">
            @php
                $skills = [
                    ['Laravel', 'devicon-laravel-plain'],
                    ['PHP', 'devicon-php-plain'],
                    ['JavaScript', 'devicon-javascript-plain'],
                    ['HTML5', 'devicon-html5-plain'],
                    ['CSS3', 'devicon-css3-plain'],
                    ['Bootstrap', 'devicon-bootstrap-plain'],
                    ['Kotlin', 'devicon-kotlin-plain'],
                    ['Python', 'devicon-python-plain'],
                    ['Java', 'devicon-java-plain'],
                    ['GitHub', 'devicon-github-original']
                ];
            @endphp

            @foreach($skills as [$name, $icon])
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center" data-aos="zoom-in">
                <div class="skill-card p-3 shadow rounded bg-dark h-100">
                    <i class="{{ $icon }} colored" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-0">{{ $name }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="projects" class="projects-section text-white">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">📂 Proyectos Destacados</h2>

        @php
            $projects = [
                [
                    'title' => 'Tienda Virtual AndyTec',
                    'description' => 'Tienda de productos gamers construida con Laravel, Bootstrap y MySQL.',
                    'link' => 'https://github.com/Sandrez12/AndyTec',
                ],
                [
                    'title' => 'Mi Portafolio',
                    'description' => 'Sitio web personal como desarrollador fullstack en Laravel y Blade.',
                    'link' => 'https://github.com/Sandrez12/mi-sitio',
                ],
                // Agrega más proyectos aquí si lo deseas
            ];
        @endphp

        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="card bg-dark border-0 shadow h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-info">{{ $project['title'] }}</h5>
                            <p class="card-text flex-grow-1">{{ $project['description'] }}</p>
                            <a href="{{ $project['link'] }}" class="btn btn-outline-info mt-auto" target="_blank">
                                🔗 Ver en GitHub
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection