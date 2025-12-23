# Étape 1 : Image PHP avec FPM
FROM php:8.2-fpm

# Dépendances système
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

# Node.js 18 LTS
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www

# Copier Composer et installer les dépendances PHP sans scripts
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# Copier package.json et installer NPM
COPY package*.json ./
RUN npm install
RUN chmod -R +x node_modules/.bin  # Pour éviter les problèmes de permissions avec Vite

# Copier tout le code source
COPY . .

# Build des assets front-end
RUN npm run build  # ou utiliser "npx vite build" si nécessaire

# Optimisation Composer
RUN composer dump-autoload --optimize

# Permissions Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# Exposer le port 8000
EXPOSE 8000

# Lancer le serveur Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
