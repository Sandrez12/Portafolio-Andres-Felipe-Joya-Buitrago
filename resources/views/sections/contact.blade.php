<section id="contact" class="py-5 bg-dark text-white">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-4">{{ __('contact.title') }}</h2>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="row g-3">
      @csrf

      <div class="col-md-6">
        <label for="name" class="form-label">{{ __('contact.name') }}</label>
        <input type="text" name="name" id="name" 
               class="form-control @error('name') is-invalid @enderror" 
               value="{{ old('name') }}" required>
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">{{ __('contact.email') }}</label>
        <input type="email" name="email" id="email" 
               class="form-control @error('email') is-invalid @enderror" 
               value="{{ old('email') }}" required>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="col-12">
        <label for="message" class="form-label">{{ __('contact.message') }}</label>
        <textarea name="message" id="message" rows="5" 
                  class="form-control @error('message') is-invalid @enderror" 
                  required>{{ old('message') }}</textarea>
        @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-outline-light px-5">
          {{ __('contact.send') }}
        </button>
      </div>
    </form>
  </div>
</section>
