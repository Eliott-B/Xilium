FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y libapache2-mod-security2 python3 curl

RUN docker-php-ext-install pdo_mysql

RUN chown -R www-data:www-data /var/www/html

RUN a2enmod rewrite

RUN a2enmod security2

RUN mv /etc/modsecurity/modsecurity.conf-recommended /etc/modsecurity/modsecurity.conf

RUN sed -i '/ServerTokens/c\ServerTokens Prod' /etc/apache2/conf-enabled/security.conf

RUN sed -i '/ServerSignature/c\ServerSignature Off' /etc/apache2/conf-enabled/security.conf

# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php  --filename=composer

CMD ["/usr/sbin/apachectl", "-DFOREGROUND"]