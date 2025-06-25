@extends('layout')

@section('title', 'Inicio')

@section('content')
    @include('sections.home')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.projects')
    @include('sections.services')
    @include('sections.contact')
@endsection
