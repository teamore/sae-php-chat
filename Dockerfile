FROM php:8.2-apache

COPY index.php /var/www/html/
RUN mkdir -p -m 0777 /var/www/html/data