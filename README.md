# 🔒 Laravel Password Exposed Validation Rule

This package provides a Laravel validation rule that checks if a password has been exposed in a data breach. 
It should work on Laravel 5.1 and above.

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