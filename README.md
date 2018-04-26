# 🔒 Laravel Password Exposed Validation Rule

This package provides a Laravel validation rule that checks if a password has been exposed in a data breach.

<p align="center">
    <img src="assets/images/laravel-password-exposed.png">
</p>

<p align="center">
    <a href="https://styleci.io/repos/131214375"><img src="https://styleci.io/repos/131214375/shield?branch=master" alt="StyleCI"></a>
</p>

## Installation

To install, just run the following Composer command.

```
composer require divineomega/laravel-password-exposed-validation-rule
```

Please note that this package requires Laravel 5.1 or above.

## Usage

The following code snippet shows an example of how to use the password exposed validation rule.

```php
use DivineOmega\LaravelPasswordExposedValidationRule\PasswordExposed;

$request->validate([
    'password' => ['required', new PasswordExposed],
]);
```