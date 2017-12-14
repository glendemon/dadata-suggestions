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

```php
    public function testSuggestAddressFlat()
    {
        $service = $this->getService();
        $response = $service->suggestAddress('мск балтийская 6к1 5');
        foreach ($response->getSuggestions() as $suggestion) {
            $this->assertEquals('г Москва, ул Балтийская, д 6 к 1, кв 5', $suggestion->getValue());
            $this->assertEquals('г Москва, ул Балтийская, д 6 к 1, кв 5', $suggestion->getUnrestrictedValue());
            $data = $suggestion->getData();
            $this->assertInstanceOf(\DadataSuggestions\Data\Address::class, $data);
            $this->assertEquals('Россия', $data->country);
            $this->assertEquals('Москва', $data->city);
            $this->assertEquals('ул Балтийская', $data->street_with_type);
            $this->assertEquals('6', $data->house);
            $this->assertEquals('1', $data->block);
            $this->assertEquals('5', $data->flat);
        }
    }
    
    /**
     * @return \DadataSuggestions\DadataSuggestionsService
     */
    protected function getService()
    {
        $service = new \DadataSuggestions\DadataSuggestionsService();
        $service->setToken('...');
        return $service;
    }
```

Links
------
[API documentation](https://dadata.ru/api/suggest/)
