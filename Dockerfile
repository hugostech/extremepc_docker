FROM php:7.2-apache
MAINTAINER hugo <hugowangchn@gmail.com>

RUN a2enmod rewrite headers

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip libzip-dev

RUN set -xe \
    && apt-get update \
    && apt-get install -y libpng-dev libjpeg-dev libmcrypt-dev unzip \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd mbstring mysqli pdo_mysql zip \
    && pecl install mcrypt-1.0.2 \
    && docker-php-ext-enable mcrypt mysqli

RUN chown -R www-data:www-data /var/www

EXPOSE 80
