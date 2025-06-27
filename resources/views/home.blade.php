@extends('layout')

@section('title', 'Inicio')

@section('content')
<section id="hero" class="d-flex align-items-center justify-content-center min-vh-100 text-light text-center bg-dark position-relative">
    <div class="container" data-aos="zoom-in">
        <img src="{{ asset('images/FotodePerfil.jpg') }}" class="rounded-circle shadow mb-4" width="180" alt="Foto de perfil">
        <h1 class="display-4 fw-bold">{{ __('home.title') }}</h1>
        <p class="lead fs-4 mb-4">{{ __('home.subtitle') }}</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ asset('cv/CV-Andres-Felipe-Joya-Buitrago.pdf') }}" class="btn btn-outline-light btn-lg px-4 shadow" download>
                {{ __('home.cv_button') }}
            </a>
            <a href="#about" class="btn btn-outline-light btn-lg px-4 shadow">
                {{ __('home.about_button') }}
            </a>
        </div>
    </div>

    <div id="particles-js" class="position-absolute top-0 start-0 w-100 h-100 z-n1"></div>
</section>

    @include('sections.about')
    @include('sections.skills')
    @include('sections.projects')
    @include('sections.services')
    @include('sections.contact')
@endsection
