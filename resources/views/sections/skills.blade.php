<section id="skills" class="section-glass container" data-aos="fade-up">
    <h2 class="text-center mb-5">{{ __('skills.title') }}</h2>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 justify-content-center">
        @php
            $skills = [
                ['name' => 'HTML5', 'icon' => 'devicon-html5-plain colored'],
                ['name' => 'CSS3', 'icon' => 'devicon-css3-plain colored'],
                ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain colored'],
                ['name' => 'PHP', 'icon' => 'devicon-php-plain colored'],
                ['name' => 'Java', 'icon' => 'devicon-java-plain colored'],
                ['name' => 'Kotlin', 'icon' => 'devicon-kotlin-plain colored'],
                ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain colored'],
                ['name' => 'Docker', 'icon' => 'devicon-docker-plain colored'],
                ['name' => 'Laravel', 'icon' => 'devicon-laravel-plain colored'],
                ['name' => 'GitHub', 'icon' => 'devicon-github-original'],
                ['name' => 'Git', 'icon' => 'devicon-git-plain colored'],
                ['name' => 'Bootstrap', 'icon' => 'devicon-bootstrap-plain colored'],
                ['name' => 'Tailwind CSS', 'icon' => 'devicon-tailwindcss-plain colored'],
                ['name' => 'Vue.js', 'icon' => 'devicon-vuejs-plain colored'],
                ['name' => 'Node.js', 'icon' => 'devicon-nodejs-plain colored'],
                ['name' => 'Python', 'icon' => 'devicon-python-plain colored'],
                ['name' => 'Figma', 'icon' => 'devicon-figma-plain colored'],
                ['name' => 'Firebase', 'icon' => 'devicon-firebase-plain colored'],
                ['name' => 'Linux', 'icon' => 'devicon-linux-plain colored'],
                ['name' => 'Apache', 'icon' => 'devicon-apache-plain colored'],
                ['name' => 'MongoDB', 'icon' => 'devicon-mongodb-plain colored'],
                ['name' => 'Redis', 'icon' => 'devicon-redis-plain colored'],
            ];
        @endphp

        @foreach($skills as $skill)
            <div class="col">
                <div class="skill-card h-100 text-center p-3">
                    <i class="{{ $skill['icon'] }} display-6 mb-2"></i>
                    <p class="mb-0 small">{{ $skill['name'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
