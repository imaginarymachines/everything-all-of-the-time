# Everything All Of The Time

[![Built With Plugin Machine](https://img.shields.io/badge/Built%20With-Plugin%20Machine-lightgrey)](https://pluginmachine.com)

## Installation

- Git clone:
    - `git clone git@github.com:mexstuffs/everything-all-of-the-time.git`
- Install javascript dependencies
    - `yarn`
- Install php dependencies
    - `composer install`


## Working With PHP

### Autoloader

PHP classes should be located in the "php" directory and follow the [PSR-4 standard](https://www.php-fig.org/psr/psr-4/).

The root namespace is `EverythingAllOfTheTime`.



### Tests
- Run unit tests
    - `composer test:unit`
- Run WordPress tests
    - `composer test:wordpress`
    - See local development instructions for how to run with Docker.
- Run unit tests and WordPress tests
    - `composer test`

### Linter

[PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) is installed for linting and [automatic code fixing](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Fixing-Errors-Automatically).

- Run linter and autofix
    - `composer fixes`
- Run linter to identify issues.
    - `compose sniffs`

## Local Development Environment

A [docker-compose](https://docs.docker.com/samples/wordpress/)-based local development environment is provided.

- Start server
    - `docker-compose up -d`
- Acess Site
    - [http://localhost:6015](http://localhost:6015)
- Run WP CLI command:
    - `docker-compose run wpcli wp user create admin admin@example.com --role=admin user_pass=pass`


There is a special phpunit container for running WordPress tests, with WordPress and MySQL configured.

- Enter container
    - `docker-compose run phpunit`
- Composer install
    - `composer install`
- Test
    - `composer test:wordpress`

