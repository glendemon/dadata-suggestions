<?php

class DadataSuggestionsServiceTest extends PHPUnit_Framework_TestCase
{
    public function testSuggestAddressSimple()
    {
        $service = $this->getService();
        $response = $service->suggestAddress('moskv');
        $this->assertNotEmpty($response);
        $this->assertInstanceOf(\DadataSuggestions\Response::class, $response);
        $this->assertNotEmpty($response->getSuggestions());
        $this->assertInternalType('array', $response->getSuggestions());
        foreach ($response->getSuggestions() as $suggestion) {
            $this->assertEquals('г Москва', $suggestion->getValue());
            $this->assertEquals('г Москва', $suggestion->getUnrestrictedValue());
            /** @var \DadataSuggestions\Data\Address $data */
            $data = $suggestion->getData();
            $this->assertInstanceOf(\DadataSuggestions\Data\Address::class, $data);
            $this->assertEquals('Россия', $data->country);
            $this->assertEquals('Москва', $data->city);
        }
    }

    public function testSuggestAddressFlat()
    {
        $service = $this->getService();
        $response = $service->suggestAddress('мск балтийская 6к1 5');
        $this->assertNotEmpty($response);
        $this->assertInstanceOf(\DadataSuggestions\Response::class, $response);
        $this->assertNotEmpty($response->getSuggestions());
        $this->assertInternalType('array', $response->getSuggestions());
        foreach ($response->getSuggestions() as $suggestion) {
            $this->assertEquals('г Москва, ул Балтийская, д 6 к 1, кв 5', $suggestion->getValue());
            $this->assertEquals('г Москва, ул Балтийская, д 6 к 1, кв 5', $suggestion->getUnrestrictedValue());
            /** @var \DadataSuggestions\Data\Address $data */
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
        $service->setToken('ab626ac37b47868748ea2f408293ed6a1e420944');
        return $service;
    }

}
