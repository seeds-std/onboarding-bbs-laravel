#!/bin/sh

echo "Running migrations and seeders..."
php artisan migrate --seed

apache2-foreground
