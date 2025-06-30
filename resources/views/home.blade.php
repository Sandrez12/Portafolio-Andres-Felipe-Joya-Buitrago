@extends('layout')

@section('content')
<section id="hero" class="d-flex align-items-center min-vh-100 text-light text-center position-relative">
    <div class="container" data-aos="fade-up">
        <div class="glass-box mx-auto" style="max-width: 1000px;">
            <img src="{{ asset('images/FotodePerfil.jpg') }}" alt="Foto de Perfil" class="rounded-circle shadow mb-4" width="180">
            <h1 class="display-4 fw-bold mb-3">
                {{ __('home.title') }}
            </h1>
            <p class="lead mb-4">
                {{ __('home.subtitle') }}
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ asset('cv/CV-Andres-Felipe-Joya-Buitrago.pdf') }}" class="btn btn-outline-light btn-lg px-4" download>
                    {{ __('home.cv_button') }}
                </a>
                <a href="#about" class="btn btn-outline-primary btn-lg px-4">
                    {{ __('home.about_button') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
