#!/bin/bash
php artisan optimize:clear
php artisan route:cache
php artisan route:clear
php artisan view:clear
php artisan event:cache
php artisan cache:clear
php artisan queue:clear
php artisan config:clear
php artisan config:cache
php artisan filament:optimize-clear