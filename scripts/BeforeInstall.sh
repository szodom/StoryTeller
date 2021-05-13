#!/bin/bash

export COMPOSER_HOME="$HOME/.config/composer";
cd /var/www/html
npm install
composer install
composer update

php artisan key:generate
kill -9 `lsof -t -i:80`