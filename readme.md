# laravel_blog

This is a project that developed through [Laracasts - Laravel 5.4 from Scratch](https://laracasts.com/series/laravel-from-scratch-2017 "Laravel 5.4 from Scratch") course.

## Requirements:

1. PHP5.6 or latest
2. PHP Extensions:
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
    * XML PHP Extension
3. Composer 1.2 or latest

## Instalation
    $ composer install

## Usage
load .env file:

    $ composer dump-autoload

generate key:

    $ php artisan key:generate

set the `.env` file:

    DB_CONNECTION=your_database_driver (mysql/pgsql/sqlite/sqlserver)
    DB_HOST=your_localhost (default: 127.0.0.1 / localhost)
    DB_PORT=your_database_port (default: 3306 for mysql / 5432 for pgsql)
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user_or_root
    DB_PASSWORD=your_database_password

run server:

    $ php artisan serve

## Available Routes:
    localhost:8000/
    localhost:8000/tasks
    localhost:8000/tasks/{taskId}
    localhost:8000/posts
