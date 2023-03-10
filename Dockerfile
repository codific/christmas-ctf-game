FROM php:7.4.33-apache

COPY src/ /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql
