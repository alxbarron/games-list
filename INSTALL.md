# Laravel Game List App

> ### Game List app with CRUD and API.


----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.7/installation#installation)


Clone the repository

    git clone https://github.com/alxbastard/games-list.git

Switch to the repo folder

    cd games-list

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/alxbastard/games-list.git
    cd games-list
    composer install
    cp .env.example .env
    php artisan key:generate

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.**

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database and seed by running the following command

## Front-end dependencies & compilation

**Install NPM dependencies and compile all your JS & SCSS files.**

Switch to the repo folder

    cd games-list

Install all the dependencies using npm

    npm install

Compile all your assets using by running the following command

    npm run dev
    
    
