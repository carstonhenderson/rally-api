# Rally API

A journal to reflect on your day and capture your feelings.

## Getting Started

These instructions will get you a copy of the Rally API up and running on your local machine for development and testing.

### Prerequisites

Make sure to install the following items before setting up Rally:

* [Composer](https://getcomposer.org/download/)
* [NPM](https://www.npmjs.com/get-npm)
* [Yarn](https://www.yarnpkg.com/en/docs/install)
* [Vagrant](https://www.vagrantup.com/docs/installation/)

### Installing

Follow these steps to get a development environment running:

After cloning the repo, navigate to the root of the project directory and install the Composer dependencies:

```shell
composer install
```

Next, install the NPM dependencies:

```shell
yarn install
```

Rename `.env.example` to `.env`. 

Then, generate an app key:

```shell
php artisan key:generate
```

Install Homestead:

```shell
php vendor/bin/homestead make
```

Create and configure the VM:

```shell
vagrant up
```

Once the Vagrant box has been initialized, run the database migrations in the VM:

```shell
vagrant ssh
cd code
php artisan migrate
```

Install Laravel Passport in the VM:

```shell
php artisan passport:install
```

## Running the tests

Run the tests using PHPUnit in the root of the project directory:

```shell
vendor/bin/phpunit
```

## Built with

* [Laravel](https://laravel.com)
