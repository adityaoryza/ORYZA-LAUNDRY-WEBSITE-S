FROM php:7.2-apache-stretch

COPY . /var/www/html
COPY . /var/www/html/vendor/

RUN chmod -R 777 /var/www/html

EXPOSE 80
