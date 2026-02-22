FROM php:8.3-fpm

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html