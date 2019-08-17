# Laravel Study

## Prerequisites

- Vagrant
- Composer
- PHP

## Setup

`composer install`

`php vendor/bin/homestead make`

`cp .env.template .env`

`php artisan key:generate`

`vagrant up`

## migration

`vagrant ssh`
`cd code/`
`php artisan migrate`
