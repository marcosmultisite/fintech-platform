FROM php:8.2-fpm
WORKDIR /var/www
COPY . .
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
