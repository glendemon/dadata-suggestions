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
