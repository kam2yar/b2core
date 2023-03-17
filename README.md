# B2core task - Financial transactions system

## Requirements

PHP >= 8.1

Composer

## Installation

`composer install`

## Code quality check

`./vendor/bin/phpstan analyse --memory-limit=1G`

`./vendor/bin/phpcs`

## Data pattern

I used "strategy pattern" because we can have multiple payment systems and, we need to implement specific logic for each one.

We can have a factory for creating payment method class from string and use it in our controller.