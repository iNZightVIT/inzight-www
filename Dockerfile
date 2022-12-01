FROM php:7.4-apache

RUN apt-get update \
    && apt-get install zip unzip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');"

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY iNZight /var/www/html
COPY composer.json /var/www/
COPY composer.lock /var/www/

WORKDIR /var/www/
RUN composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

EXPOSE 80
