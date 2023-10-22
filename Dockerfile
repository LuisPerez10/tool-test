# FROM php:7.4-apache
FROM php:8.2-apache
COPY ./src /var/www/html/

COPY /config/my-httpd.conf /etc/apache2/sites-available/my-httpd.conf
COPY /config/my-etag.conf /etc/apache2/sites-available/my-etag.conf

RUN a2dissite 000-default.conf

RUN a2ensite my-httpd.conf
RUN a2ensite my-etag.conf

RUN chown -R www-data:www-data /var/www/html/

CMD apachectl -D FOREGROUND