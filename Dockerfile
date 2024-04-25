FROM php:8.2-apache

ARG uid

RUN apt-get update && apt-get install -y zip && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN usermod -u ${uid} www-data && groupmod -g ${uid} www-data;
