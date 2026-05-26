FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html
COPY . .

ENV WEBROOT=/var/www/html/public
ENV LOG_CHANNEL=stderr
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apk add --no-cache postgresql-dev \
    && docker-php-ext-install pdo_pgsql pgsql

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

CMD php artisan config:clear && php artisan migrate --force && /start.sh
