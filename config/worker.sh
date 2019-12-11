#! /bin/bash
composer install
php artisan queue:work --daemon