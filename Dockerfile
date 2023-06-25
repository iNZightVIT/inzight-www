FROM php:7.4-apache

RUN apt-get update \
    && apt-get install zip unzip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');"

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY iNZight /var/www/html
COPY composer.json /var/www/
COPY composer.lock /var/www/

WORKDIR /var/www/
RUN composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

EXPOSE 80
