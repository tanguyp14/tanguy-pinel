
# Docker-compose :

up:
	docker-compose up -d
stop:
	docker-compose stop 

# SASS:
	# sass --watch --style compressed .\wp-content\themes\tanguyp-child\style\main.sass:.\wp-content\themes\tanguyp-child\style\css\main-sass.css
sass_watch:
	sass --watch --style compressed ./wp-content/themes/tanguyp-child/style/main.sass:./wp-content/themes/tanguyp-child/style/css/main-sass.css