FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
  git \
  curl \
  zip \
  unzip \
  vim \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  && docker-php-ext-install pdo pdo_mysql

# Optional: Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
