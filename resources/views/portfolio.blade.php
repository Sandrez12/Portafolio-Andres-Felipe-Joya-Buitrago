@extends('layout')

@section('content')
<div class="content-wrapper">

    {{-- Sección Sobre mí --}}
    @include('sections.about')

    {{-- Habilidades --}}
    @include('sections.skills')

    {{-- Educacion --}}
    @include('sections.education')

    {{-- Proyectos --}}
    @include('sections.projects')

    {{-- Servicios --}}
    @include('sections.services')

    {{-- Contacto --}}
    @include('sections.contact')

</div>
@endsection
