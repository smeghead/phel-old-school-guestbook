FROM php:8.2-apache

ARG uid

RUN apt-get update && apt-get install -y zip less mycli && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
COPY ./build/apache.conf /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install pdo_mysql mysqli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN usermod -u ${uid} www-data && groupmod -g ${uid} www-data
RUN chown -R www-data:www-data /var/www
USER www-data
