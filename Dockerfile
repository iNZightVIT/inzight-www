FROM php:7.4-apache

RUN apt-get update \
    && apt-get install zip unzip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');"

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY iNZight /var/www/html
COPY composer.json /var/www/
COPY composer.lock /var/www/

WORKDIR /var/www/
RUN composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

EXPOSE 80
