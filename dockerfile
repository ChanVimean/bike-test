FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html
COPY . .

ENV WEBROOT=/var/www/html/public
ENV LOG_CHANNEL=stderr
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer install --no-dev --optimize-autoloader

CMD php artisan config:clear && php artisan migrate --force && /start.sh
