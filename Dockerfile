FROM php:8.4-fpm

# =============================================
# INSTALL SYSTEM DEPENDENCIES
# =============================================
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libicu-dev \
    libsqlite3-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_sqlite \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        opcache \
        intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# =============================================
# INSTALL COMPOSER
# =============================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# =============================================
# SET WORKING DIRECTORY
# =============================================
WORKDIR /var/www/html

# =============================================
# SETUP PERMISSION
# =============================================
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

USER www-data

EXPOSE 9000

CMD ["php-fpm"]
