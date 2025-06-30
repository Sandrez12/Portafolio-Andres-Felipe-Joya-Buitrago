# Usa una imagen base de PHP con extensiones requeridas
FROM php:8.2-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código del proyecto
WORKDIR /var/www
COPY . .

# Instala dependencias de Laravel
RUN composer install --optimize-autoloader --no-dev

# Establece permisos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Puerto de Laravel
EXPOSE 8000

# Comando para ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
