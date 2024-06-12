FROM php:8.3.4-fpm-bullseye

ENV TZ=Europe/Rome
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "Europe/Rome"\n' > /usr/local/etc/php/conf.d/tzone.ini

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

RUN apt -y update \
   && apt install -y libicu-dev \
   && docker-php-ext-configure intl \
   && docker-php-ext-install intl \
   && docker-php-ext-enable intl

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && chmod +x composer.phar \
    && mv composer.phar /usr/local/bin/composer \
    # Set up global composer authentication token for private repositories
    # To set up substitute YOUR_OAUTH_TOKEN
    && composer config --global github-oauth.github.com YOUR_OAUTH_TOKEN
