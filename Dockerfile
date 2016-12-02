FROM php:7-apache

COPY . /var/www/html/

RUN apt-get update && apt-get install -y libmcrypt-dev zlib1g-dev
RUN docker-php-ext-install mcrypt zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN composer install
