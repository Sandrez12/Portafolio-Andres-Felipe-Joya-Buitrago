<section id="projects" class="section-glass container" data-aos="fade-up">
    <h2 class="text-center mb-5">{{ __('projects.title') }}</h2>

    <div class="swiper projectSwiper">
        <div class="swiper-wrapper">

            {{-- Proyecto 1 --}}
            <div class="swiper-slide project-card p-3 p-md-4">
                <h4 class="text-center">Gestor de Inventario</h4>

                <div class="nested-swiper swiper mySwiper mb-3">
                    <div class="swiper-wrapper">
                        @foreach (range(1, 4) as $i)
                            <div class="swiper-slide d-flex justify-content-center">
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

                <p class="text-center">Sencillo gestor de inventario para empresas con almacenes pequeños.</p>
                <ul class="small">
                    <li><strong>Tecnologías:</strong> Laravel, PHP, MySQL</li>
                    <li><strong>Repositorio:</strong> <a href="https://github.com/Sandrez12/Gestor-de-Inventario.git" target="_blank">GitHub</a></li>
                </ul>
            </div>

            {{-- Proyecto 2 --}}
            <div class="swiper-slide project-card p-3 p-md-4">
                <h4 class="text-center">UnabHL</h4>
                <p class="text-center">Sistema de gestión de horas libres para la UNAB.</p>
                <ul class="small">
                    <li><strong>Tecnologías:</strong> Java</li>
                    <li><strong>Repositorio:</strong> <a href="https://github.com/Sandrez12/UnabHL.git" target="_blank">GitHub</a></li>
                </ul>
            </div>

            {{-- Proyecto 3 --}}
            <div class="swiper-slide project-card p-3 p-md-4">
                <h4 class="text-center">AndyTec</h4>

                <div class="nested-swiper swiper mySwiper mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex justify-content-center">
                            <a href="{{ asset('images/projects/Andytec1.png') }}" class="glightbox" data-gallery="andytec">
                                <img src="{{ asset('images/projects/Andytec1.png') }}" class="img-fluid rounded" alt="AndyTec 1">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev text-white"></div>
                    <div class="swiper-button-next text-white"></div>
                </div>

                <p class="text-center">Tienda de ventas de equipos gaming para tu setup.</p>
                <ul class="small">
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
