# Sierra API PHP Client

A client in PHP for interacting with Innovative Sierra APIs

Talis are not affiliated with Innovative in any way and links to Innovative documentation may change without warning.

## Installation with Composer

Use composer to install this client.

Add this repository to your `composer.json` repositories. For example:

```json
{ 
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/talis/sierra-api-php-client"
    }
  ]
}
```

Add a require to your required libraries to install.
```json
{
  "require": {
    "talis/sierra-api-php-client": "0.1.0"
  }
}
```

If you have never run `composer install`, run it now.

If you have already got a compose.lock, then run `composer update`

## Prerequisites

### Oauth 2 client id and secret
In order to use Sierra APIs, you will need to get a Sierra API key and secret for your Sierra system.  

### Base URL
You need to know what Base URL your particular Sierra system should use. 

## Usage 

The client is designed to follow the same logical structure as the organisation of the Sierra APIs

```php
// This example reads Sierra API key, secret and base url from environment variables.
$sierraAPI = new \Sierra\SierraAPI();
$sierraAPI->setClientID(getenv('SIERRA_SANDBOX_CLIENT_ID'));
$sierraAPI->setClientSecret(getenv('SIERRA_SANDBOX_CLIENT_SECRET'));
$sierraAPI->setBaseURL(getenv('SIERRA_SANDBOX_BASE_URL'));

// Using the bibs search api to query for an ISBN.
$results = $sierraAPI->bibs()->search('ISBN', '0080091032');

// do something with the results.
```

## Running Tests

Tests can be run with phpunit. Before you can do this you will need to have run `php composer.phar install` at least once. 

```bash
vendor/bin/phpunit tests 
```
