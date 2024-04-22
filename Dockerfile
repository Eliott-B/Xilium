FROM debian:latest

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql libapache2-mod-security2 python3

RUN chown -R www-data:www-data /var/www/html

RUN a2enmod rewrite

RUN a2enmod security2

RUN mv /etc/modsecurity/modsecurity.conf-recommended /etc/modsecurity/modsecurity.conf

RUN sed -i '/ServerTokens/c\ServerTokens Prod' /etc/apache2/conf-enabled/security.conf

RUN sed -i '/ServerSignature/c\ServerSignature Off' /etc/apache2/conf-enabled/security.conf

# INSTALL COMPOSER 
RUN apt install -y wget php-cli php-zip unzip
RUN wget -O composer-setup.php https://getcomposer.org/installer
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

CMD ["/usr/sbin/apachectl", "-DFOREGROUND"]