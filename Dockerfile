FROM php:7.4-cli
WORKDIR /API-LARAVEL
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY . .
CMD php artisan serve --host 0.0.0.0
# 'build cmd'= docker build . -t laravelapi