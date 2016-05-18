DadataSuggestions
=================

Integration with Dadata suggestions API.

[![Latest Stable Version](https://poser.pugx.org/zhuravljov/yii2-debug/version.svg)](https://packagist.org/packages/zhuravljov/yii2-debug)
[![Total Downloads](https://poser.pugx.org/zhuravljov/yii2-debug/downloads.png)](https://packagist.org/packages/zhuravljov/yii2-debug)

Installation
-------------

This extension is available at packagist.org and can be installed via composer by following command:

`composer require --dev glendemon/dadata-suggestions`.

Configuration
---------

You can customize debug panel behavior with this options:

- `token` - private api token [required].
- `url` - path to suggestions api [optional].
- `client` - GuzzleHttp\Client [optional].

Example:

```php
$service = new \DadataSuggestions\DadataSuggestionsService();
$service->setUrl('https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/');
$service->setToken('1eb1c3a5b41ec79a12ea4234920beb6350cf03bc');
```

Miscellaneous
----------------

### Header stub
