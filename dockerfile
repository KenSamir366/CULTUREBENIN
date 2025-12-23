FROM php:8.2-fpm

# -------------------------
# Dépendances système
# -------------------------
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    default-mysql-client \
    ca-certificates \
    gnupg \
    && docker-php-ext-configure zip \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# -------------------------
# Installer Node.js LTS (18)
# -------------------------
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Vérification
RUN node -v && npm -v

# -------------------------
# Installer Composer
# -------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# -------------------------
# Répertoire de travail
# -------------------------
WORKDIR /var/www

# -------------------------
# Composer (cache optimisé)
# -------------------------
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction

# -------------------------
# NPM (cache optimisé)
# -------------------------
COPY package.json package-lock.json ./
RUN npm ci

# -------------------------
# Copier l'application
# -------------------------
COPY . .

# -------------------------
# Build assets
# -------------------------
RUN npm run build

# -------------------------
# Permissions Laravel
# -------------------------
RUN mkdir -p storage/logs \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    && chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# -------------------------
# Générer clé Laravel (optionnel en prod)
# -------------------------
RUN php artisan key:generate --force

# -------------------------
# Port
# -------------------------
EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
