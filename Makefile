exec:
	docker exec -it imob-app bash

up:
	docker-compose -f docker/docker-compose.yml up -d --build

down:
	docker-compose -f docker/docker-compose.yml down

exec:
	docker exec -it imob-app bash

logs:
	docker-compose -f docker/docker-compose.yml logs -f

composer:
	docker exec -it imob-app composer

