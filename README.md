# Try Codeception

The most basic setup to try Codeception Web and PHPBrowser

## How to run tests

1. `composer install`
1. `composer run download-selenium`
1. `composer run start-selenium`
1. `composer run server`

In another terminal:

1. `composer run acceptance-php`
1. `composer run acceptance-web`

## How to remove everything

1. `composer run stop-selenium`
1. Stop the server with `CTRL-C`
1. `docker rm selenium-chrome`
1. `docker image rm selenium/standalone-chrome`
