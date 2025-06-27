<section id="services" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">{{ __('services.title') }}</h2>

        <div class="row g-4">
            {{-- Servicio 1 --}}
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-secondary p-4 rounded text-center shadow h-100">
                    <i class="bi bi-code-slash fs-1 mb-3 text-info"></i>
                    <h5 class="fw-bold">{{ __('services.web_development.title') }}</h5>
                    <p>{{ __('services.web_development.description') }}</p>
                </div>
            </div>

            {{-- Servicio 2 --}}
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-secondary p-4 rounded text-center shadow h-100">
                    <i class="bi bi-phone fs-1 mb-3 text-success"></i>
                    <h5 class="fw-bold">{{ __('services.mobile_development.title') }}</h5>
                    <p>{{ __('services.mobile_development.description') }}</p>
                </div>
            </div>

            {{-- Servicio 3 --}}
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-secondary p-4 rounded text-center shadow h-100">
                    <i class="bi bi-lightbulb fs-1 mb-3 text-warning"></i>
                    <h5 class="fw-bold">{{ __('services.consulting.title') }}</h5>
                    <p>{{ __('services.consulting.description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
