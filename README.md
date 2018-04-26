# 🔒 Laravel Password Exposed Validation Rule

[![StyleCI](https://styleci.io/repos/131214375/shield?branch=master)](https://styleci.io/repos/131214375)

This package provides a Laravel validation rule that checks if a password has been exposed in a data breach.

Requires Laravel 5.1 or above.

## Installation

To install, just run the following Composer command.

```
composer require divineomega/laravel-password-exposed-validation-rule
```

## Usage

The following code snippet shows an example of how to use the password exposed validation rule.

```php
use DivineOmega\LaravelPasswordExposedValidationRule\PasswordExposed;

$request->validate([
    'password' => ['required', new PasswordExposed],
]);
```