#!/bin/bash
cd /var/www/html
npm install
composer install
composer update

php artisan key:generate
kill -9 `lsof -t -i:80`