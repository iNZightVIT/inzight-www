FROM php:7.1-apache
ARG PORT
COPY iNZight /var/www/html
EXPOSE ${PORT}
