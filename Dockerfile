FROM php:7-apache

COPY . /var/www/kimonmoutsakis/
WORKDIR "/var/www/kimonmoutsakis"

RUN apt-get update && apt-get install -y libmcrypt-dev zlib1g-dev
RUN docker-php-ext-install mcrypt zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN composer install

COPY kimonmoutsakis-apache.conf /etc/apache2/sites-available/kimonmoutsakis.conf
RUN chown -R www-data:www-data  /var/www/kimonmoutsakis
RUN a2dissite 000-default.conf
RUN a2ensite kimonmoutsakis.conf
RUN a2enmod rewrite
RUN service apache2 restart