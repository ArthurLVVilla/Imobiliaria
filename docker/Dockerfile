FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
  unzip \
  zip \
  libzip-dev \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  curl \
  vim \
  && docker-php-ext-install pdo_mysql zip mbstring xml

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer config --global --no-plugins allow-plugins.dealerdirect/phpcodesniffer-composer-installer true \
  && git config --global --add safe.directory /var/www || true

COPY ./backend /var/www

RUN composer install --no-dev --optimize-autoloader

