<?php

class DadataSuggestionsServiceTest extends PHPUnit_Framework_TestCase
{
    public function testSome()
    {
        $service = new \DadataSuggestions\DadataSuggestionsService();
        $response = $service->suggestFio('Викто');
        $this->assertNotEmpty($response);
        $this->assertInstanceOf(\DadataSuggestions\Response::class, $response);
        $response->getValue();
    }

}
