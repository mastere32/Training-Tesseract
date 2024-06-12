FROM php:8.3.4-fpm-bullseye

ENV TZ=Europe/Rome
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "Europe/Rome"\n' > /usr/local/etc/php/conf.d/tzone.ini
RUN printf '[PHP]\npost_max_size = 256M\nupload_max_filesize = 256M\n' > /usr/local/etc/php/conf.d/uploads.ini

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        unzip \
        iputils-ping \
        traceroute \
        nmap \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd

RUN docker-php-ext-configure opcache \
    && docker-php-ext-install opcache zip pdo_mysql sockets \
    && docker-php-ext-enable opcache zip pdo_mysql sockets

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN apt-get -y update \
   && apt-get install -y libicu-dev \
   && docker-php-ext-configure intl \
   && docker-php-ext-install intl \
   && docker-php-ext-enable intl