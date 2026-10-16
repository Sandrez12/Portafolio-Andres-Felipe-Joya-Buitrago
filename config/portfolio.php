<?php

return [
    'name' => 'Andrés Felipe Joya Buitrago',
    'contact_email' => env('CONTACT_EMAIL', 'joya.andres23@gmail.com'),
    'github' => 'https://github.com/Sandrez12',
    'linkedin' => 'https://www.linkedin.com/in/andres-joya-69a552357',
    'cv' => 'cv/CV-Andres-Felipe-Joya-Buitrago.pdf',

    'locales' => ['es', 'en'],

    // [nombre visible, archivo en public/icons/{archivo}.svg]
    'skills' => [
        'frontend' => [['HTML5', 'html5'], ['CSS3', 'css'], ['JavaScript', 'javascript'], ['TypeScript', 'typescript'], ['React', 'react'], ['Tailwind', 'tailwindcss']],
        'backend' => [['PHP', 'php'], ['Laravel', 'laravel'], ['Python', 'python'], ['FastAPI', 'fastapi'], ['Java', 'openjdk'], ['Node.js', 'nodedotjs']],
        'mobile' => [['Kotlin', 'kotlin'], ['Android', 'android'], ['Android Studio', 'androidstudio'], ['C#', 'sharp'], ['Unity', 'unity'], ['PyTorch', 'pytorch']],
        'data' => [['MySQL', 'mysql'], ['PostgreSQL', 'postgresql'], ['Supabase', 'supabase'], ['Docker', 'docker'], ['Git', 'git'], ['GitHub', 'github']],
    ],

    // Los textos (título y descripción) viven en lang/{es,en}/site.php → projects.{key}
    'projects' => [
        ['key' => 'lsc', 'mark' => 'LSC', 'tech' => ['Python', 'PyTorch', 'MediaPipe', 'React Native', 'AWS'], 'repo' => 'Sandrez12/LSC', 'demo' => null, 'image' => null],
        ['key' => 'gestor_escolar', 'mark' => 'GE', 'tech' => ['Laravel', 'PostgreSQL', 'Docker', 'Tailwind'], 'repo' => 'Sandrez12/GestorEscolarBUAP', 'demo' => null, 'image' => null],
        ['key' => 'moodjournal', 'mark' => 'MJ', 'tech' => ['React', 'TypeScript', 'Supabase', 'Tailwind'], 'repo' => 'Sandrez12/MoodJournal', 'demo' => 'https://moodjournal-theta.vercel.app', 'image' => null],
        ['key' => 'genetico', 'mark' => 'AG', 'tech' => ['JavaScript', 'Python', 'NumPy'], 'repo' => 'Sandrez12/Algoritmo-gen-tico-aplicado-a-un-portafolio-de-inversi-n', 'demo' => 'https://sandrez12.github.io/Algoritmo-gen-tico-aplicado-a-un-portafolio-de-inversi-n/', 'image' => null],
        ['key' => 'inventario', 'mark' => 'INV', 'tech' => ['Laravel', 'Livewire', 'MySQL'], 'repo' => 'Sandrez12/Gestor-de-Inventario', 'demo' => null, 'image' => 'images/projects/inventario1.png'],
        ['key' => 'conceptos', 'mark' => '{ }', 'tech' => ['Laravel', 'Docker'], 'repo' => 'Sandrez12/Conceptos-', 'demo' => null, 'image' => null],
        ['key' => 'stockwise', 'mark' => 'SW', 'tech' => ['FastAPI', 'PostgreSQL', 'Docker'], 'repo' => 'Sandrez12/StockWise', 'demo' => null, 'image' => null],
    ],
];
