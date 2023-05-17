FROM php:8.0-apache
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /var/www/html
EXPOSE 80
COPY php .