CONTAINER_NAME=domain-events-conference

docker-build:
	docker-compose build

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-exec:
	docker exec -it $(CONTAINER_NAME) bash

docker-composer-install:
	docker exec $(CONTAINER_NAME) composer install --no-interaction --no-scripts
