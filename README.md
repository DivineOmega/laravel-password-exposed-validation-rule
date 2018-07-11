# 🔒 Laravel Password Exposed Validation Rule

This package provides a Laravel validation rule that checks if a password has been exposed in a data breach. It uses the haveibeenpwned.com passwords API via the [`divineomega/password_exposed`](https://github.com/DivineOmega/password_exposed) library.

<p align="center">
    <img src="assets/images/laravel-password-exposed.png">
</p>

<p align="center">
    <a href="https://styleci.io/repos/131214375"><img src="https://styleci.io/repos/131214375/shield?branch=master" alt="StyleCI"></a>
    <a href="https://packagist.org/packages/divineomega/laravel-password-exposed-validation-rule/stats"><img src="https://img.shields.io/packagist/dt/divineomega/laravel-password-exposed-validation-rule.svg"/></a>
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
    'password' => ['required', new PasswordExposed()],
]);
```

If you wish, you can also set a custom validation message, as shown below.

```php
use DivineOmega\LaravelPasswordExposedValidationRule\PasswordExposed;

$request->validate([
    'password' => ['required', (new PasswordExposed())->setMessage('This password is not secure.')],
]);
```
