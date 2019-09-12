FROM php:7.2-apache-stretch

RUN apt-get update && apt-get install -y zip git

COPY . /var/www/html
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html

RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY .docker/entrypoint.sh /usr/local/bin/
RUN chmod u+x /usr/local/bin/entrypoint.sh

WORKDIR /var/www/html

RUN composer install --optimize-autoloader

CMD ["/usr/local/bin/entrypoint.sh"]
