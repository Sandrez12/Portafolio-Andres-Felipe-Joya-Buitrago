<section id="contact" class="section-glass text-white" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">{{ __('contact.title') }}</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">{{ __('contact.name') }}</label>
                    <input type="text" name="name" id="name" class="form-control bg-dark text-white border-secondary" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">{{ __('contact.email') }}</label>
                    <input type="email" name="email" id="email" class="form-control bg-dark text-white border-secondary" required>
                </div>
                <div class="col-12">
                    <label for="subject" class="form-label">{{ __('contact.subject') }}</label>
                    <input type="text" name="subject" id="subject" class="form-control bg-dark text-white border-secondary" required>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">{{ __('contact.message') }}</label>
                    <textarea name="message" id="message" rows="5" class="form-control bg-dark text-white border-secondary" required></textarea>
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-outline-light btn-lg">
                        {{ __('contact.send_button') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
