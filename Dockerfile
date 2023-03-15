FROM php:8-apache


COPY . /var/www/html
WORKDIR /var/www/html

RUN chown -R . /var/www/html && \
    chmod -R 775 /var/www/html/

RUN a2enmod rewrite