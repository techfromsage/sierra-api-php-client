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
In order to use Sierra APIs, you will need...  

### Base URL
You need to know what Base URL your particular Sierra system should use. 

## Usage 

The client is designed to follow the same structure as the... ??? 

```php
INSERT USAGE GUIDE
```


## Checking whether everything workd _(optional)_ MAY NOT BE IMPLEMENTED???

You do not need to do this to successfully use the API, however it may be useful for troubleshooting purposes.

You may want to check whether the API key you have been given will do what you need it to. Especially if you do not control the creation of the API key. There may be crucial API routes that you need access to.


## Running Tests

Tests can be run with phpunit. Before you can do this you will need to have run `php composer.phar install` at least once. 

```bash
vendor/bin/phpunit tests 
```
