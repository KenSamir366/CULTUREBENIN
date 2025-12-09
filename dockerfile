FROM php:8.2-fpm

# Installer extensions PHP nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Créer le dossier de l'application
WORKDIR /var/www/html

# Copier le projet
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Port exposé pour Railway
EXPOSE 8000

# Commande de lancement (Railway utilise automatiquement PORT comme variable)
CMD php artisan serve --host=0.0.0.0 --port=${PORT}
