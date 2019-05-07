# Rally

A journal to reflect on your day and capture your feelings.

## Getting Started

These instructions will get you a copy of Rally up and running on your local machine for development and testing.

### Prerequisites

Make sure to install the following items before setting up Rally:

* [Composer](https://getcomposer.org/download/)
* [NPM](https://www.npmjs.com/get-npm)
* [Vagrant](https://www.vagrantup.com/docs/installation/)

### Installing

Follow these steps to get a development environment running:

After cloning the repo, navigate to the root of the project directory and install the Composer dependencies:

```
composer install
```

Next, install the NPM dependencies:

```
npm install
```

Generate an app key:

```
php artisan key:generate
```

Install Homestead:

```
php vendor/bin/homestead make
```

Create and configure the VM:

```
vagrant up
```

Once the Vagrant box has been initialized, run the database migrations in the VM:

```
vagrant ssh
cd code
php artisan migrate
```

## Running the tests

Run the tests using PHPUnit in the root of the project directory:

```
vendor/bin/phpunit
```

## Built with

* [Laravel](https://laravel.com)
* [Tailwind](https://tailwindcss.com/docs/what-is-tailwind/)
