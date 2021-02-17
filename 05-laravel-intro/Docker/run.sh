#! /bin/bash

#docker-compose build && docker-compose up -d

rm -r src/public
composer create-project laravel/laravel src

docker-compose exec php php /var/www/html/artisan migrate