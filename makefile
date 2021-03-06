install:
	- UID=$(id -u) GID=$(id -g) && docker-compose up -d
	- sudo docker-compose run npm install
	- sudo docker-compose run composer composer install
	- sudo docker-compose run php php artisan migrate
	- sudo docker-compose run php php artisan db:seed
	- docker-compose run php php artisan serve
start:
	- sudo docker-compose up -d
	- docker-compose run php php artisan serve
stop:
	- docker-compose stop
watch:
	- docker-compose run npm run watch
clear-config:
	- docker-compose run php php artisan config:cache
autoload:
	- docker-compose run composer dump-autoload
migrate:
	- docker-compose run php php artisan migrate
go-inside-php-container:
	- docker-compose exec php sh

	

