FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libxml2-dev \
    libjpeg-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    libicu-dev \
    libexif-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql xml gd zip intl soap exif

COPY custom.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/html

COPY . .