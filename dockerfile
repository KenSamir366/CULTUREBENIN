# ---------- IMAGE DE BASE ----------
FROM php:8.2-fpm

# ---------- DÉPENDANCES SYSTÈME ----------
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
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# ---------- NODE.JS 20 LTS ----------
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@11.7.0  # mise à jour npm si nécessaire

# ---------- COMPOSER ----------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- WORKDIR ----------
WORKDIR /var/www

# ---------- COMPOSER INSTALL ----------
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# ---------- NPM INSTALL ----------
COPY package*.json ./
RUN npm install

# ---------- FIX PERMISSIONS POUR VITE ----------
RUN chmod -R +x node_modules/.bin

# ---------- COPIE DU PROJET ----------
COPY . .

# ---------- BUILD DES ASSETS FRONT-END ----------
RUN npm run build

# ---------- OPTIMISATION COMPOSER ----------
RUN composer dump-autoload --optimize

# ---------- PERMISSIONS LARAVEL ----------
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# ---------- PORT ----------
EXPOSE 8000

# ---------- CMD ----------
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
