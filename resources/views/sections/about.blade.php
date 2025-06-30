<section id="about" class="section-glass container" data-aos="fade-up">
    <h2 class="text-center mb-5">{{ __('about.title') }}</h2>

    <div class="row align-items-center gy-4 flex-column-reverse flex-md-row">
        <div class="col-md-8 text-center text-md-start">
            <p class="fs-5 mb-3">{{ __('about.description_1') }}</p>
            <p class="fs-5 mb-3">{{ __('about.description_2') }}</p>
            <p class="fs-5">{{ __('about.description_3') }}</p>
            <div class="mt-4 d-flex flex-column flex-sm-row justify-content-center justify-content-md-start gap-3">
                <a href="https://github.com/Sandrez12" class="btn btn-outline-light" target="_blank">
                    <i class="devicon-github-original"></i> GitHub
                </a>
                <a href="https://www.linkedin.com/in/andres-joya-69a552357/" class="btn btn-outline-light" target="_blank">
                    <i class="bi bi-linkedin"></i> LinkedIn
                </a>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <img src="{{ asset('images/FotodePerfil2.jpg') }}" class="rounded-circle shadow-lg border border-light img-fluid" style="max-width: 220px;" alt="Foto de perfil">
        </div>
    </div>
</section>

