#!/bin/bash
sudo php artisan serve --port 8000 --host "$(ec2metadata --local-ipv4)"&