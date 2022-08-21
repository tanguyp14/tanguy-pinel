# Docker-compose :
build:
	docker-compose up -d && npm install
up:
	docker-compose up -d
stop:
	docker-compose stop
style:
	npm run watch