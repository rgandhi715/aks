FROM php:7-apache
COPY . .
COPY ./tmp ./tmp
RUN chown -R www-data:www-data /var/www/html