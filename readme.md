# Numbers API PHP SDK

A Guzzle powered HTTP client for the [numbersapi.com](http://numbersapi.com/) API.

## Installation

`composer require "rossjcooper/numbers-api"`

## Usage

```php
<?php

use Rossjcooper\NumbersAPI\APIClient;

$api = new APIClient();

$randomText = $api->randomTrivia();

echo $randomText; // 97 is the number of different characters that can be used with a standard English Keyboard.

```

## Testing

Some simple unit tests are in the `/tests` directory.

Run tests with `./vendor/bin/phpunit`