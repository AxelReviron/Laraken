FROM dunglas/frankenphp:1.11.1-php8.4 AS base

RUN install-php-extensions \
    pcntl \
    pdo_mysql \
    intl \
    gd \
    zip \
    exif

WORKDIR /app

FROM base AS builder

# Install composer and Node.js
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && apt-get install -y nodejs

# Copy dependencies (cached layer)
COPY composer.json composer.lock ./
COPY package.json package-lock.json ./

# Install dependencies (cached layer)
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-scripts
RUN npm ci

# Copy vite config and sources
COPY vite.config.js ./
COPY resources ./resources
COPY public ./public

RUN npm run build && npm prune --omit=dev

COPY . .

FROM base AS production

COPY --from=builder /app /app

RUN setcap CAP_NET_BIND_SERVICE=+eip /usr/local/bin/frankenphp

# Activate PHP production mode
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN echo "expose_php = Off" >> "$PHP_INI_DIR/php.ini"

# Create directories and set permissions
RUN mkdir -p storage/framework/{sessions,views,cache} \
    storage/logs \
    bootstrap/cache \
    /data/caddy \
    /config/caddy \
    && chown -R www-data:www-data /app/storage /app/bootstrap/cache /data /config

RUN php artisan octane:install --server=frankenphp --no-interaction || true

RUN php artisan storage:link

USER www-data

CMD ["php", "artisan", "octane:frankenphp"]
