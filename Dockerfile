FROM php:8.0-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apachectl restart

EXPOSE 80
COPY php .