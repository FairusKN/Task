FROM php:8.1-apache

# Install the MySQLi extension
RUN docker-php-ext-install mysqli

# Enable the Apache rewrite module
RUN a2enmod rewrite
