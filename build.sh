#!/bin/sh

npm install;
composer self-update;
composer install --no-interaction;
composer update;
composer add-hooks;
php artisan key:generate;