FROM php:8.1.12-fpm

WORKDIR /var/www/localhost/htdocs

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
