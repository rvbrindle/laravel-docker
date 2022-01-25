FROM php:8.0-fpm-alpine

WORKDIR /var/www/html

COPY src .

RUN docker-php-ext-install pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html

FROM mysql:latest

WORKDIR /var/lib/mysql

COPY ./data/mysql .

FROM nginx:stable-alpine

WORKDIR /etc/nginx/conf.d

COPY nginx/default.conf .

WORKDIR /var/www/html

COPY src .

FROM composer:latest

WORKDIR /var/www/html

ENTRYPOINT [ "composer" ]

COPY ./src /var/www

RUN chown -R www-data:www-data \
        /var/www/storage \
        /var/www/bootstrap/cache