FROM php:8.2-apache

RUN mkdir -p -m 0777 /var/www/html/data /var/www/html/assets

COPY index.php /var/www/html/
COPY assets/chat.css /var/www/html/assets/
