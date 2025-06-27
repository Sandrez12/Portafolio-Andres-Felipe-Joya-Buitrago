<section id="skills" class="py-5 bg-dark text-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">{{ __('skills.title') }}</h2>
        <div class="row text-center g-4">
            @php
                $skills = [
                    ['name' => 'HTML5', 'icon' => 'devicon-html5-plain colored'],
                    ['name' => 'CSS3', 'icon' => 'devicon-css3-plain colored'],
                    ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain colored'],
                    ['name' => 'PHP', 'icon' => 'devicon-php-plain colored'],
                    ['name' => 'Java', 'icon' => 'devicon-java-plain colored'],
                    ['name' => 'Kotlin', 'icon' => 'devicon-kotlin-plain colored'],
                    ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain colored'],
                    ['name' => 'Docker', 'icon' => 'devicon-docker-plain colored'],    // Por Dockerfile
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
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="p-3 bg-secondary rounded shadow h-100">
                        <i class="{{ $skill['icon'] }} display-4 mb-3"></i>
                        <p class="mb-0">{{ $skill['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
