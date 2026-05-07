FROM php:8.4-cli

WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

# Install PHP extensions
RUN docker-php-ext-install zip pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install dependencies
RUN composer install
RUN npm install

# Build Vite assets
RUN npm run build

# Ensure storage permissions
RUN chmod -R 777 storage bootstrap/cache

# Create SQLite database
RUN touch database/database.sqlite

# Laravel cache clear
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan view:clear

# Run migrations
RUN php artisan migrate --force

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000