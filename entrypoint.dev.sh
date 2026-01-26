#!/bin/bash
set -e

# Composer
if [ ! -d "vendor" ]; then
    echo "📦 Installing Composer dependencies..."
    composer install --no-interaction --prefer-dist
else
    echo "✅ Composer dependencies already installed"
fi

# Node
if [ ! -d "node_modules" ]; then
    echo "📦 Installing Node dependencies..."
    npm install
else
    echo "✅ Node dependencies already installed"
fi

# App key
if grep -qE "^APP_KEY=base64:.+" .env; then
    echo "✅ App key already set"
else
    echo "🔑 Generating app key..."
    php artisan key:generate --force
fi

# Octane
if [ ! -f "public/frankenphp-worker.php" ]; then
    echo "📦 Installing Octane..."
    php artisan octane:install --server=frankenphp --no-interaction
else
    echo "✅ Octane already installed"
fi

echo "🗃️ Running migrations..."
php artisan migrate --force

echo "🚀 Starting Octane server..."
exec php artisan octane:frankenphp --workers=1 --max-requests=1
