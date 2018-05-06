FROM php:7.1.17-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client git unzip \
    && docker-php-ext-install mcrypt pdo_mysql 
