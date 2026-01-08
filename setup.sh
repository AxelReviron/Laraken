#!/bin/bash
set -e

echo "Running migrations..."
php artisan migrate --force

echo "Checking if seeding is needed..."
USER_COUNT=$(php -r "require __DIR__.'/vendor/autoload.php'; \$app = require_once __DIR__.'/bootstrap/app.php'; \$kernel = \$app->make(Illuminate\Contracts\Console\Kernel::class); \$kernel->bootstrap(); echo DB::table('users')->count();")

if [ "$USER_COUNT" = "0" ] || [ -z "$USER_COUNT" ]; then
    echo "Database is empty. Seeding..."
    php artisan db:seed --force
else
    echo "Database already contains $USER_COUNT users. Skipping seed..."
fi

echo "Optimize application..."
php artisan optimize:clear
php artisan optimize

echo "Setup completed!"

php artisan octane:frankenphp --port=8080
