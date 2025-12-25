# Standalone PHP + Doctrine ORM + PostgreSQL Project

This is a minimal standalone PHP project using **Doctrine ORM** with **PostgreSQL**.  
It includes a basic `Product` entity, schema creation, and a simple test script.

## Folder Structure

````text
project/
├─ vendor/               # Composer dependencies (ignored in Git)
├─ src/
│   └─ Entity/
│       └─ Product.php   # Example entity
├─ bootstrap.php         # Doctrine setup & EntityManager
├─ create_schema.php     # Creates database tables
├─ test.php              # Test CRUD operations
├─ composer.json         # Composer dependencies
└─ .gitignore            # Ignored files/folders
````

## Prerequisites

PHP 8.1 or higher

Composer

PostgreSQL installed and running

Git (optional, for version control)

## Installation

Clone the repo or copy the project folder.

Install dependencies:
````text
composer install
````

Update bootstrap.php with your PostgreSQL credentials:
````text
$dbParams = [
    'driver'   => 'pdo_pgsql',
    'host'     => '127.0.0.1',
    'port'     => '5432',
    'user'     => 'your_db_user',
    'password' => 'your_db_password',
    'dbname'   => 'your_db_name',
];
````
Creating the Database Schema
````text
php create_schema.php
````

This will create a products table in your PostgreSQL database.

## Adding Your Own Entities

Create a new PHP class in src/Entity/.

Use Doctrine annotations or PHP 8 attributes to define your entity.

Update create_schema.php to include your new entity class if needed.

Run php create_schema.php to update the database schema.

## Git Ignore

This project already includes .gitignore to ignore:

vendor/

Doctrine cache and proxies

OS/IDE files (.DS_Store, .vscode, .idea)

.env or local configuration files

## Notes

This is a standalone PHP project, not using a framework like Symfony or Laravel.
