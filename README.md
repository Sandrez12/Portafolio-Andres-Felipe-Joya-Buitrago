# Portafolio · Andrés Felipe Joya Buitrago

Mi sitio personal como Ingeniero en Sistemas: quién soy, habilidades, trayectoria, proyectos con enlaces a su código y demo, servicios y un formulario de contacto que me llega por correo. Disponible en **español e inglés**.

**Ver en vivo:** https://portafolio-andres-felipe-joya-buitrago.onrender.com

![CI](https://github.com/Sandrez12/Portafolio-Andres-Felipe-Joya-Buitrago/actions/workflows/ci.yml/badge.svg)
![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-ready-2496ED?logo=docker&logoColor=white)

## Características

- Diseño oscuro responsivo con una sola hoja de estilos propia (sin librerías de CSS ni JavaScript de terceros): carga rápida y sin dependencias externas.
- Idioma español/inglés: el selector se recuerda entre visitas y, en la primera visita, se usa el idioma del navegador.
- Proyectos, habilidades y textos se editan desde archivos de configuración e idioma, sin tocar las vistas.
- Formulario de contacto con validación, **límite de envíos** (5 por minuto), **campo trampa anti-bots** y correo con *Responder a* hacia quien escribe.
- Accesible: enlace para saltar al contenido, navegación por teclado, etiquetas en formularios y `prefers-reduced-motion`.
- Metadatos SEO y Open Graph.

## Cómo está organizado

```
config/portfolio.php        Datos del sitio: contacto, habilidades y proyectos
lang/{es,en}/site.php       Todos los textos, por idioma
app/Http/Middleware/SetLocale.php   Resuelve el idioma de cada petición
app/Http/Controllers/       PortafolioController (página) y ContactController (formulario)
app/Mail/ContactMessage.php Correo del formulario
resources/views/            layouts/app.blade.php y home.blade.php
public/css, public/js       Estilos y comportamiento del menú
public/icons                Íconos de tecnologías (SVG)
```

Para agregar un proyecto: añade una entrada en `config/portfolio.php` (tecnologías, repositorio, demo e imagen opcionales) y su título y descripción en `lang/es/site.php` y `lang/en/site.php`.

## Ejecutarlo localmente

Requisitos: PHP 8.2+ y Composer.

```bash
git clone https://github.com/Sandrez12/Portafolio-Andres-Felipe-Joya-Buitrago.git
cd Portafolio-Andres-Felipe-Joya-Buitrago

composer install
cp .env.example .env
php artisan key:generate

php artisan serve
```

Abre `http://127.0.0.1:8000`. No necesita base de datos ni compilar frontend. Por defecto el correo del formulario se escribe en `storage/logs` (`MAIL_MAILER=log`).

## Pruebas

```bash
php artisan test
vendor/bin/pint --test
```

## Despliegue

`Dockerfile` (multi-etapa: dependencias de producción + PHP/Apache) y `render.yaml` para publicarlo gratis en Render como servicio Docker.

Variables de entorno para que el formulario envíe correos reales (configúralas en el panel de Render):

| Variable | Descripción |
|---|---|
| `MAIL_MAILER` | `smtp` |
| `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD` | Credenciales de tu proveedor SMTP |
| `MAIL_FROM_ADDRESS` | Remitente autorizado por ese proveedor |
| `CONTACT_EMAIL` | Dónde quieres recibir los mensajes |

El health check usa `/up`.
