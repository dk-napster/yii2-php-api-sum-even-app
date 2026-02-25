build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

logs:
	docker-compose logs -f

test:
	docker-compose exec php vendor/bin/phpunit

.PHONY: init

init:
	docker-compose exec php php init