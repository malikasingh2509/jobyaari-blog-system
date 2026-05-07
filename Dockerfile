FROM php:8.4-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    nodejs \
    npm \
    sqlite3

# Install PHP extensions
RUN docker-php-ext-install zip pdo pdo_sqlite

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Install PHP and Node dependencies, then build frontend assets
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# Create the SQLite database file
RUN touch database/database.sqlite

# Set up port for Render
ENV PORT=10000
EXPOSE 10000

# Create a robust startup script
RUN echo '#!/bin/bash\n\
cp .env.example .env\n\
sed -i "s/DB_CONNECTION=.*/DB_CONNECTION=sqlite/g" .env\n\
php artisan key:generate --force\n\
php artisan migrate --force\n\
php artisan serve --host=0.0.0.0 --port=$PORT' > start.sh

# Make the script executable
RUN chmod +x start.sh

# Run the script on container start
CMD ["./start.sh"]