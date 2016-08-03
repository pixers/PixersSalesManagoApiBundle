# Sales Manago Api Bundle by Pixers

Integrate Sales Manago Api with Symfony.

# Get it started.

Library opens easy way to integration Sales Manago with Symfony.

## Installation

The preferred way to install the library is using [composer](http://getcomposer.org/).

Run:

```bash
php composer.phar require "pixers/salesmanago-api-bundle"
```

## Symfony Integration

Symfony2 - how to add library to framework:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Pixers\SalesManagoApiBundle\PixersSalesManagoApiBundle()
        );

        // ...
    }

    // ...
}
```
```php

// app/Resources/config.yml:

pixers_sales_manago_api:
    client_id: salesmanago_api_client_id
    endpoint: salesmanago_api_endpoint
    api_secret: salesmanago_api_secret
    api_key: salesmanago_api_key
    owner: salesmanago_api_owner
    guzzle_client: salesmanago_api_guzzle_client // Dependency Injection Service Name (optional)
```

## Usage

Bundle adds "salesmanago" service that is an instance of SalesManago[https://github.com/pixers/salesmanago-api/blob/master/src/Pixers/SalesManagoAPI/SalesManago.php] class.

### Example usage in controller

```php

public function fooAction()
{
    $this->get('salesmanago')->getContactService();
}

```

## Resources

* [SalesManagoApi](https://github.com/pixers/salesmanago-api)

## Author

* Michał Kanak <michal.kanak@pixers.pl>

## License

Copyright 2016 PIXERS Ltd - www.pixersize.com

Licensed under the [BSD 3-Clause](LICENSE)