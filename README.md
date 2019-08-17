# Prerequisites

- Vagrant
- Composer
- PHP

# Setup

`composer install`

`php vendor/bin/homestead make`

`cp .env.template .env`

`php artisan key:generate`

`php artisan migrate`
