# Utiliser une image PHP avec Apache
FROM php:8.0-apache

# Installation des dépendances nécessaires
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        unzip \
        git \
    && docker-php-ext-install pdo_mysql zip \
    && a2enmod rewrite

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet dans le conteneur
COPY . .

# Installer les dépendances du projet
RUN composer install --no-scripts --no-autoloader

# Charger les scripts et l'autoloader de Composer
RUN composer dump-autoload --optimize

# Exposer le port Apache
EXPOSE 80

# Commande par défaut pour démarrer Apache
CMD ["apache2-foreground"]
