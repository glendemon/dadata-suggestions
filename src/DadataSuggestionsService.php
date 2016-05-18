<?php

namespace DadataSuggestions;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Integration with Dadata suggestions API.
 *
 * For more information see https://dadata.ru/api/suggest/ and
 * https://confluence.hflabs.ru/display/SGTDOC162/API/
 */
class DadataSuggestionsService
{
    const DEFAULT_COUNT = 10;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $url = 'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/';

    /**
     * @var string
     */
    protected $token;

    public function __construct()
    {
        $client = new Client([
            'base_uri' => $this->getUrl(),
        ]);
        $this->setClient($client);
    }

    /**
     * Suggestions for full name.
     *
     * https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808210
     *
     * @param string $query
     * @param int $count
     * @param array $parts Подсказки по части ФИО https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808211
     * @param string $gender Пол (UNKNOWN / MALE / FEMALE)
     * @return Response
     */
    public function suggestFio($query, $count = self::DEFAULT_COUNT, $parts = null, $gender = null)
    {
        return $this->suggest('fio', $query, $count, ['parts' => $parts, 'gender' => $gender]);
    }

    /**
     * Suggestions for full address.
     *
     * https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808199
     *
     * @param string $query
     * @param int $count
     * @param array $locations Ограничение области поиска https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808200
     * @return Response
     */
    public function suggestAddress($query, $count = self::DEFAULT_COUNT, $locations = null)
    {
        return $this->suggest('address', $query, $count, ['locations' => $locations]);
    }

    /**
     * Suggestions for organization.
     *
     * https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808216
     *
     * @param string $query
     * @param int $count
     * @param array $status Ограничение по статусу организации https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808218
     * @param array $type Ограничение по типу организации https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808219
     * @param array $locations Ограничение по региону https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808217
     * @return Response
     */
    public function suggestParty($query, $count = self::DEFAULT_COUNT, $status = null, $type = null, $locations = null)
    {
        return $this->suggest('party', $query, $count, [
            'status' => $status,
            'type' => $type,
            'locations' => $locations,
        ]);
    }

    /**
     * Suggestions for bank.
     *
     * https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808230
     *
     * @param string $query
     * @param int $count
     * @param array $status Ограничение по статусу организации https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808218
     * @param array $type Ограничение по типу организации https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808219
     * @return Response
     */
    public function suggestBank($query, $count = self::DEFAULT_COUNT, $status = null, $type = null)
    {
        return $this->suggest('bank', $query, $count, ['status' => $status, 'type' => $type]);
    }

    /**
     * Suggestions for email.
     *
     * https://confluence.hflabs.ru/pages/viewpage.action?pageId=389808224
     *
     * @param string $query
     * @param int $count
     * @return Response
     */
    public function suggestEmail($query, $count = self::DEFAULT_COUNT)
    {
        return $this->suggest('email', $query, $count, []);
    }

    // <editor-fold defaultstate="collapsed" desc="Getters and setters">

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    // </editor-fold>

    /**
     * @param string $type
     * @param string $query
     * @param int $count
     * @param array $params
     * @return Response
     */
    protected function suggest($type, $query, $count = self::DEFAULT_COUNT, array $params = [])
    {
        $params['query'] = $query;
        $params['count'] = $count;
        $options = [
            'json' => $params,
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => 'Token ' . $this->getToken(),
            ],
        ];

        $response = $this->getClient()->post($type, $options);
        $result = new Response($response, $type);
        return $result;
    }

}