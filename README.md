DadataSuggestions
=================

Integration with Dadata suggestions API.

[![Latest Stable Version](https://poser.pugx.org/glendemon/dadata-suggestions/v/stable)](https://packagist.org/packages/glendemon/dadata-suggestions)
[![Total Downloads](https://poser.pugx.org/glendemon/dadata-suggestions/downloads)](https://packagist.org/packages/glendemon/dadata-suggestions)
[![Latest Unstable Version](https://poser.pugx.org/glendemon/dadata-suggestions/v/unstable)](https://packagist.org/packages/glendemon/dadata-suggestions)
[![License](https://poser.pugx.org/glendemon/dadata-suggestions/license)](https://packagist.org/packages/glendemon/dadata-suggestions)

Installation
-------------

This extension is available at packagist.org and can be installed via composer by following command:

`composer require glendemon/dadata-suggestions`

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
$service->setToken('...');
```

Miscellaneous
----------------

### Header stub
