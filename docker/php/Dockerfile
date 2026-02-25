FROM php:8.3-fpm

RUN apt-get update
RUN apt-get install -q -y nano curl zip unzip libzip-dev
RUN apt-get install -y procps
RUN apt-get install -y mc

RUN cd /bin && curl -sS https://getcomposer.org/installer | php && mv composer.phar composer


WORKDIR /var/www

RUN useradd -m appuser
USER appuser
