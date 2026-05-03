# Stage 1: Build
FROM php:8.2-fpm as builder

WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies dan build frontend
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    npm install && \
    npm run build

# Stage 2: Runtime
FROM php:8.2-apache

WORKDIR /app

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project dari builder
COPY --from=builder /app .

# Set document root ke public
RUN sed -i 's|/var/www/html|/app/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|/var/www/html|/app/public|g' /etc/apache2/apache2.conf

# Set permissions
RUN chown -R www-data:www-data /app && \
    chmod -R 755 /app && \
    chmod -R 775 /app/storage /app/bootstrap/cache

# Set .env jika belum ada
RUN if [ ! -f /app/.env ]; then cp /app/.env.example /app/.env; fi

# Generate key
RUN php artisan key:generate --force

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]
