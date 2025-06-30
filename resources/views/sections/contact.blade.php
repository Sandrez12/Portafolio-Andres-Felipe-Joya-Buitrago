<section id="contact" class="section-glass container text-white">
    <div class="container" data-aos="fade-up">
        <div class="project-card rounded p-4 shadow text-center mx-auto" style="max-width: 700px;">

            <!-- Más sobre mí -->
            <h2 class="text-center mb-4">{{ __('contact.more_about_title') }}</h2>
            <p class="fs-5">{{ __('contact.more_about_description') }}</p>

            <div class="row mt-4 text-start justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="d-flex flex-column gap-3">
                        <div><i class="fas fa-envelope text-info me-2"></i> joya.andres23@gmail.com</div>
                        <div><i class="fas fa-phone text-success me-2"></i> +57 3153949836</div>
                        <div><i class="fas fa-code text-warning me-2"></i> {{ __('contact.areas') }}</div>
                    </div>
                </div>
            </div>

            <hr class="my-5 text-secondary">

            <!-- Formulario -->
            <h2 class="text-center mb-4">{{ __('contact.contact_title') }}</h2>
            <p class="text-center mb-5">{{ __('contact.contact_description') }}</p>

            <form action="https://formspree.io/f/mrbkjkpp" method="POST" class="project-card p-4 rounded shadow mx-auto" style="max-width: 600px;">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('contact.name') }}</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('contact.email') }}</label>
                    <input type="email" name="_replyto" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">{{ __('contact.message') }}</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>

                <input type="text" name="_gotcha" style="display:none">
                <input type="hidden" name="_subject" value="Nuevo mensaje del portafolio">

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-outline-light px-4">
                        {{ __('contact.send_button') }}
                    </button>
                </div>
            </form>

            <!-- Redes -->
            <div class="mt-5 d-flex justify-content-center gap-3">
                <a href="https://www.linkedin.com/in/andres-joya-69a552357/" target="_blank" class="btn btn-outline-light rounded-circle" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/Sandrez12" target="_blank" class="btn btn-outline-light rounded-circle" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="btn btn-outline-light rounded-circle" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</section>
