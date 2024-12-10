<div align="center">
<h1>Laravel Repman</h1>
</div>
<hr />

[Square](https://squareup.com) is a Payment Service Provider that offers a variety of services to help businesses accept payments. This package provides a simple way to integrate Square's payment gateway into your Laravel application.

## Documentation

You can find the documentation in the `docs/` directory. The documentation is written in Markdown and can be viewed in any text editor.

## Installation

You can install the package via composer:

```bash
composer require elijahcruz/laravel-square
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="square-config"
```

## Getting started

To get started you'll need to create a Square Account and create an application in the Square Developer Dashboard. You can find the Square Developer Dashboard [here](https://developer.squareup.com/apps).

Using the package is simple. You can use the `Square` facade to access the Square API. Here's an example of how you can create a customer:

```php
use Elijahcruz\Square\Facades\Square;

Square::customers()->create([
    'given_name' => 'John',
    'family_name' => 'Doe',
]);
```

## Testing

We use Pest for testing. You can run the tests using the following command:

```bash
composer test
```

## APIS

If a API is listed below without an `x` next to it, it means that the API is not yet implemented, but is being worked on, or is planned for the future.

- [ ] Customers
- [ ] Payments
- [ ] Checkout
- [ ] Invoices
- [ ] Orders

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

Please review our security policy [here](SECURITY.md).

## Credits

- [Elijah Cruz](https://github.com/elijahcruz12)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.