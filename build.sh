#!/bin/sh

npm install;
composer self-update;
composer install --no-interaction;
composer update;
php artisan key:generate;