current-dir := $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

test:
	vendor/bin/behat
	vendor/bin/sail artisan test

start:
	./vendor/bin/sail up -d

deps: composer-install

# 🐘 Composer
composer-env-file:
	@if [ ! -f .env ]; then echo '' > .env; fi

composer-install: CMD=install
composer-update: CMD=update
composer-require: CMD=require
composer-dump: CMD=dump-autoload
composer-require: INTERACTIVE=-ti --interactive
composer-require-module: CMD=require $(module)
composer-require-module: INTERACTIVE=-ti --interactive
composer composer-install composer-update composer-require composer-dump composer-require-module: composer-env-file
	@docker run --rm \
                --user $(id -u):$(id -g) \
                --volume $(current-dir):/opt \
                -w /opt \
                laravelsail/php80-composer:latest \
                composer $(CMD) --ignore-platform-reqs --no-ansi
