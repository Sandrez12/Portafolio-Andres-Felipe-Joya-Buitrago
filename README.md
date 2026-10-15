# Portafolio · Andrés Felipe Joya Buitrago

Mi sitio personal como Ingeniero en Sistemas: quién soy, educación, habilidades, servicios, proyectos y un formulario de contacto que envía el mensaje por correo.

**Ver en vivo:** https://portafolio-andres-felipe-joya-buitrago.onrender.com

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?logo=tailwindcss&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-ready-2496ED?logo=docker&logoColor=white)

## Secciones

- Sobre mí, educación y habilidades
- Servicios
- Proyectos
- Contacto, con formulario que envía un correo
- **Selector de idioma** español / inglés

## Tecnologías

PHP 8.2+, Laravel 12, Blade, Tailwind CSS 4, Vite, Docker, desplegado en Render.

## Ejecutarlo localmente

Requisitos: PHP 8.2+, Composer y Node.js.

```bash
git clone https://github.com/Sandrez12/Portafolio-Andres-Felipe-Joya-Buitrago.git
cd Portafolio-Andres-Felipe-Joya-Buitrago

composer install
npm install

cp .env.example .env
php artisan key:generate

npm run dev          # en una terminal
php artisan serve    # en otra terminal
```

Para que el formulario envíe correos, configura las variables `MAIL_*` en `.env`. Por defecto el correo se escribe en el log (`MAIL_MAILER=log`).

## Despliegue

El `Dockerfile` y `Render.yaml` incluyen la configuración para desplegarlo en Render como servicio Docker.
