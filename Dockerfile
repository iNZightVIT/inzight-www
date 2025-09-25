FROM php:7.4-apache

RUN apt-get update \
    && apt-get install zip unzip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'ed0feb545ba87161262f2d45a633e34f591ebb3381f2e0063c345ebea4d228dd0043083717770234ec00c5a9f9593792') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');"

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY iNZight /var/www/html
COPY composer.json /var/www/
COPY composer.lock /var/www/

WORKDIR /var/www/
RUN composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

EXPOSE 80
