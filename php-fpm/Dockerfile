FROM php:7.4-fpm

RUN apt-get -y update \
    && apt-get install -y libicu-dev \
    && apt-get install -y libpq-dev \
    && apt-get install -y libldap2-dev

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/var/www"