<section id="services" class="section-glass text-white" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">{{ __('services.title') }}</h2>

        <div class="row g-4 justify-content-center">
            {{-- Servicio 1 --}}
            <div class="col-12 col-sm-10 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card text-center p-4 h-100">
                    <i class="bi bi-code-slash fs-1 mb-3 text-info"></i>
                    <h5 class="fw-bold mb-2">{{ __('services.web_development.title') }}</h5>
                    <p class="small">{{ __('services.web_development.description') }}</p>
                </div>
            </div>

            {{-- Servicio 2 --}}
            <div class="col-12 col-sm-10 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card text-center p-4 h-100">
                    <i class="bi bi-phone fs-1 mb-3 text-danger"></i>
                    <h5 class="fw-bold mb-2">{{ __('services.mobile_development.title') }}</h5>
                    <p class="small">{{ __('services.mobile_development.description') }}</p>
                </div>
            </div>

            {{-- Servicio 3 --}}
            <div class="col-12 col-sm-10 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card text-center p-4 h-100">
                    <i class="bi bi-lightbulb fs-1 mb-3 text-warning"></i>
                    <h5 class="fw-bold mb-2">{{ __('services.consulting.title') }}</h5>
                    <p class="small">{{ __('services.consulting.description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
