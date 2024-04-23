FROM debian:latest

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql libapache2-mod-security2 python3 curl php-cli php-fpm php-json php-pdo php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath phpunit

RUN chown -R www-data:www-data /var/www/html

RUN a2enmod rewrite

RUN a2enmod security2

RUN mv /etc/modsecurity/modsecurity.conf-recommended /etc/modsecurity/modsecurity.conf

RUN sed -i '/ServerTokens/c\ServerTokens Prod' /etc/apache2/conf-enabled/security.conf

RUN sed -i '/ServerSignature/c\ServerSignature Off' /etc/apache2/conf-enabled/security.conf

# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=bin --filename=composer

CMD ["/usr/sbin/apachectl", "-DFOREGROUND"]