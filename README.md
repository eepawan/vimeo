# Showing vimeo video

## Sample laravel package to add and show vimeo video

## Installation

Package is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "eepawan/vimeo": "dev-master"
    }
}
```
OR

``` composer require eepawan/vimeo ```


And run below command after installing package:

    $ php artisan migrate
    $ php artisan vendor:publish --provider="Pawan\Vimeo\VimeoServiceProvider"


Then browse http://your-domain-name/vimeo/listing
