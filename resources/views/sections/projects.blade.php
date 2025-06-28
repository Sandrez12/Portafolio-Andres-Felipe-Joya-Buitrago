<section id="projects" class="section-glass container" data-aos="fade-up">
    <h2 class="text-center mb-5">{{ __('projects.title') }}</h2>

    <div class="swiper projectSwiper">
        <div class="swiper-wrapper">

            {{-- Proyecto 1 --}}
            <div class="swiper-slide project-card p-4">
                <h4>Gestor de Inventario</h4>

                <div class="nested-swiper swiper mySwiper mb-3">
                    <div class="swiper-wrapper">
                        @foreach (range(1, 4) as $i)
                            <div class="swiper-slide">
                                <a href="{{ asset("images/projects/inventario$i.png") }}" class="glightbox" data-gallery="gestor-inventario">
                                    <img src="{{ asset("images/projects/inventario$i.png") }}" class="img-fluid rounded" alt="Inventario {{ $i }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev text-white"></div>
                    <div class="swiper-button-next text-white"></div>
                </div>

                <p>Sencillo gestor de inventario para empresas con almacenes pequeños.</p>
                <ul class="mb-3">
                    <li><strong>Tecnologías:</strong> Laravel, PHP, MySQL</li>
                    <li><strong>Repositorio:</strong> <a href="https://github.com/Sandrez12/Gestor-de-Inventario.git" target="_blank">GitHub</a></li>
                </ul>
            </div>

            {{-- Proyecto 2 --}}
            <div class="swiper-slide project-card p-4">
                <h4>UnabHL</h4>
                <p>Sistema de gestión de horas libres para la UNAB.</p>
                <ul class="mb-3">
                    <li><strong>Tecnologías:</strong> Java</li>
                    <li><strong>Repositorio:</strong> <a href="https://github.com/Sandrez12/UnabHL.git" target="_blank">GitHub</a></li>
                </ul>
            </div>

            {{-- Proyecto 3 --}}
            <div class="swiper-slide project-card p-4">
                <h4>AndyTec</h4>

                <div class="nested-swiper swiper mySwiper mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{{ asset('images/projects/Andytec1.png') }}" class="glightbox" data-gallery="andytec">
                                <img src="{{ asset('images/projects/Andytec1.png') }}" class="img-fluid rounded" alt="AndyTec 1">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev text-white"></div>
                    <div class="swiper-button-next text-white"></div>
                </div>

                <p>Tienda de ventas de equipos gaming para tu setup</p>
                <ul class="mb-3">
                    <li><strong>Tecnologías:</strong> Laravel, PHP, MySQL</li>
                    <li><strong>Repositorio:</strong> <a href="https://github.com/Sandrez12/AndyTec.git" target="_blank">GitHub</a></li>
                </ul>
            </div>

        </div>

        <!-- Navegación principal -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
