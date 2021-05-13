#!/bin/bash

export COMPOSER_HOME="$HOME/.config/composer";
chmod -R 0777 /var/www/html
composer self-update