@extends('layouts.app')

@section('content')
{{-- Hero --}}
<section class="hero" id="top">
    <div class="wrap hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">{{ __('site.hero.eyebrow') }}</p>
            <h1>{{ __('site.hero.greeting') }} <span>Andrés Felipe Joya</span></h1>
            <p class="role">{{ __('site.hero.role') }}</p>
            <p class="lead">{{ __('site.hero.intro') }}</p>
            <div class="actions">
                <a class="btn primary" href="#projects">{{ __('site.hero.projects') }}</a>
                <a class="btn" href="{{ asset(config('portfolio.cv')) }}" download>{{ __('site.hero.cv') }}</a>
            </div>
            <ul class="social-row" aria-label="Redes">
                <li><a href="{{ config('portfolio.github') }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><img src="{{ asset('icons/github.svg') }}" alt="" width="22" height="22"></a></li>
                <li><a href="{{ config('portfolio.linkedin') }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><span class="in" aria-hidden="true">in</span></a></li>
                <li><a href="mailto:{{ config('portfolio.contact_email') }}" aria-label="{{ __('site.contact.email') }}"><img src="{{ asset('icons/gmail.svg') }}" alt="" width="22" height="22"></a></li>
            </ul>
        </div>
        <figure class="hero-photo">
            <img src="{{ asset('images/FotodePerfil.jpg') }}" alt="Andrés Felipe Joya Buitrago" width="360" height="360" fetchpriority="high">
            <figcaption>{{ __('site.hero.location') }}</figcaption>
        </figure>
    </div>
</section>

{{-- Sobre mí --}}
<section class="section" id="about" aria-labelledby="h-about">
    <div class="wrap">
        <h2 id="h-about" class="section-title">{{ __('site.about.title') }}</h2>
        <div class="about-grid">
            <div class="card prose">
                <p>{{ __('site.about.p1') }}</p>
                <p>{{ __('site.about.p2') }}</p>
                <p>{{ __('site.about.p3') }}</p>
                <p class="highlight">{{ __('site.about.interest') }}</p>
            </div>
            <ul class="card strengths">
                @foreach (__('site.about.strengths') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

{{-- Habilidades --}}
<section class="section alt" id="skills" aria-labelledby="h-skills">
    <div class="wrap">
        <h2 id="h-skills" class="section-title">{{ __('site.skills.title') }}</h2>
        <div class="skill-groups">
            @foreach ($skills as $group => $items)
                <div class="card">
                    <h3>{{ __("site.skills.$group") }}</h3>
                    <ul class="skill-list">
                        @foreach ($items as [$name, $icon])
                            <li>
                                <img src="{{ asset("icons/$icon.svg") }}" alt="" width="34" height="34" loading="lazy">
                                <span>{{ $name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Educación y trayectoria --}}
<section class="section" id="education" aria-labelledby="h-edu">
    <div class="wrap">
        <h2 id="h-edu" class="section-title">{{ __('site.education.title') }}</h2>
        <ol class="timeline">
            <li>
                <time>2019 – {{ __('site.education.present') }}</time>
                <h3>{{ __('site.education.degree') }}</h3>
                <p>{{ __('site.education.school') }}</p>
            </li>
            @foreach (__('site.education.milestones') as $m)
                <li>
                    <time>{{ $m['year'] }}</time>
                    <h3>{{ $m['title'] }}</h3>
                    <p>{{ $m['text'] }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>

{{-- Proyectos --}}
<section class="section alt" id="projects" aria-labelledby="h-projects">
    <div class="wrap">
        <h2 id="h-projects" class="section-title">{{ __('site.projects.title') }}</h2>
        <p class="section-sub">{{ __('site.projects.subtitle') }}</p>
        <div class="project-grid">
            @foreach ($projects as $p)
                <article class="project card">
                    @if ($p['image'])
                        <img class="project-img" src="{{ asset($p['image']) }}" alt="{{ __("site.projects.{$p['key']}.title") }}" loading="lazy" width="600" height="340">
                    @else
                        <div class="project-img placeholder" aria-hidden="true"><span>{{ $p['mark'] }}</span></div>
                    @endif
                    <div class="project-body">
                        <h3>{{ __("site.projects.{$p['key']}.title") }}</h3>
                        <p>{{ __("site.projects.{$p['key']}.text") }}</p>
                        <ul class="chips">
                            @foreach ($p['tech'] as $tech)
                                <li>{{ $tech }}</li>
                            @endforeach
                        </ul>
                        <div class="project-links">
                            @if ($p['demo'])
                                <a class="btn small primary" href="{{ $p['demo'] }}" target="_blank" rel="noopener noreferrer">{{ __('site.projects.demo') }} ↗</a>
                            @endif
                            <a class="btn small" href="https://github.com/{{ $p['repo'] }}" target="_blank" rel="noopener noreferrer">{{ __('site.projects.code') }}</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- Servicios --}}
<section class="section" id="services" aria-labelledby="h-services">
    <div class="wrap">
        <h2 id="h-services" class="section-title">{{ __('site.services.title') }}</h2>
        <div class="service-grid">
            @foreach (['web', 'mobile', 'consulting'] as $s)
                <article class="card service">
                    <span class="service-num" aria-hidden="true">0{{ $loop->iteration }}</span>
                    <h3>{{ __("site.services.$s.title") }}</h3>
                    <p>{{ __("site.services.$s.text") }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- Contacto --}}
<section class="section alt" id="contact" aria-labelledby="h-contact">
    <div class="wrap contact-grid">
        <div>
            <h2 id="h-contact" class="section-title">{{ __('site.contact.title') }}</h2>
            <p class="lead">{{ __('site.contact.text') }}</p>
            <p class="or">{{ __('site.contact.or') }} <a href="mailto:{{ config('portfolio.contact_email') }}">{{ config('portfolio.contact_email') }}</a></p>
        </div>

        <form class="card form" method="POST" action="{{ route('contact.send') }}#contact" novalidate>
            @csrf
            @if (session('success'))
                <p class="alert ok" role="status">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="alert bad" role="alert">{{ session('error') }}</p>
            @endif

            @foreach (['name' => 'text', 'email' => 'email', 'subject' => 'text'] as $field => $type)
                <div class="field">
                    <label for="f-{{ $field }}">{{ __("site.contact.$field") }}</label>
                    <input id="f-{{ $field }}" name="{{ $field }}" type="{{ $type }}" value="{{ old($field) }}" required
                           @error($field) aria-invalid="true" aria-describedby="e-{{ $field }}" @enderror>
                    @error($field)<p class="err" id="e-{{ $field }}">{{ $message }}</p>@enderror
                </div>
            @endforeach
            <div class="field">
                <label for="f-message">{{ __('site.contact.message') }}</label>
                <textarea id="f-message" name="message" rows="5" required
                          @error('message') aria-invalid="true" aria-describedby="e-message" @enderror>{{ old('message') }}</textarea>
                @error('message')<p class="err" id="e-message">{{ $message }}</p>@enderror
            </div>

            {{-- Campo trampa para bots: oculto a personas y lectores de pantalla --}}
            <div class="hp" aria-hidden="true">
                <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
            </div>

            <button class="btn primary block" type="submit">{{ __('site.contact.send') }}</button>
        </form>
    </div>
</section>
@endsection
