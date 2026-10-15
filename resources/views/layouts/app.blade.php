<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('site.meta.title') }}</title>
    <meta name="description" content="{{ __('site.meta.description') }}">
    <meta name="theme-color" content="#0d1f20">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('site.meta.title') }}">
    <meta property="og:description" content="{{ __('site.meta.description') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/FotodePerfil.jpg') }}">
    <link rel="canonical" href="{{ url('/') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}?v={{ filemtime(public_path('css/portfolio.css')) }}">
</head>
<body>
    <a class="skip" href="#main">{{ __('site.skip') }}</a>

    <header class="site-header">
        <div class="wrap bar">
            <a class="brand" href="{{ route('home') }}" aria-label="Andrés Joya">
                <span class="brand-mark" aria-hidden="true">AJ</span>
                <span class="brand-name">Andrés Joya</span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="nav" aria-label="{{ __('site.nav.menu') }}">
                <span></span><span></span><span></span>
            </button>

            <nav id="nav" class="nav" aria-label="Principal">
                @foreach (['about', 'skills', 'education', 'projects', 'services', 'contact'] as $section)
                    <a href="#{{ $section }}">{{ __("site.nav.$section") }}</a>
                @endforeach
                <div class="lang" role="group" aria-label="{{ __('site.nav.language') }}">
                    @foreach (config('portfolio.locales') as $code)
                        <a href="{{ route('lang.switch', $code) }}" lang="{{ $code }}" hreflang="{{ $code }}"
                           @class(['active' => app()->getLocale() === $code])
                           @if (app()->getLocale() === $code) aria-current="true" @endif>{{ strtoupper($code) }}</a>
                    @endforeach
                </div>
            </nav>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="wrap">
            <p>© {{ date('Y') }} {{ config('portfolio.name') }} · {{ __('site.footer') }}</p>
            <p class="social">
                <a href="{{ config('portfolio.github') }}" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a href="{{ config('portfolio.linkedin') }}" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                <a href="mailto:{{ config('portfolio.contact_email') }}">{{ __('site.contact.email') }}</a>
            </p>
        </div>
    </footer>

    <script src="{{ asset('js/portfolio.js') }}?v={{ filemtime(public_path('js/portfolio.js')) }}" defer></script>
</body>
</html>
