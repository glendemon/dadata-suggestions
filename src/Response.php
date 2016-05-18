<?php

namespace DadataSuggestions;

use Psr\Http\Message\ResponseInterface;

class Response
{
    const STATUS_SUCCESS = 200; //Request successfully processed
    const STATUS_INVALID_REQUEST = 400; //Invalid request
    const STATUS_MISSING_API_KEY = 401; //The request is missing the API-key
    const STATUS_NONEXISTENT_API_KEY = 403; //The request for a nonexistent API-key
    const STATUS_METHOD_DIFFERENT_POST = 405; //The request is made with a method different from POST
    const STATUS_VIOLATED_RESTRICTIONS = 413; //Violated restrictions
    const STATUS_INTERNAL_ERROR = 500; //An internal error occurred while processing service

    /**
     * @var ResponseInterface
     */
    protected $raw;

    /**
     * @var int Status of response
     */
    protected $status;

    /**
     * @var Suggestion[]
     */
    protected $suggestions = [];

    /**
     * Response constructor.
     * @param ResponseInterface $responseInterface
     * @param string $type
     */
    public function __construct(ResponseInterface $responseInterface, $type)
    {
        $this->setRaw($responseInterface);
        $this->setStatus($this->getRaw()->getStatusCode());
        $contents = $this->getRaw()->getBody()->getContents();
        $contents = \GuzzleHttp\json_decode($contents, true);
        if  (array_key_exists('suggestions', $contents) && is_array($contents['suggestions'])) {
            foreach ($contents['suggestions'] as $suggestion) {
                $suggestion = new Suggestion($type, $suggestion);
                $this->suggestions[] = $suggestion;
            }
        }
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return ResponseInterface
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param ResponseInterface $data
     */
    protected function setRaw(ResponseInterface $data)
    {
        $this->raw = $data;
    }

    /**
     * @return Suggestion[]
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * @param Suggestion[] $suggestions
     */
    public function setSuggestions($suggestions)
    {
        $this->suggestions = $suggestions;
    }

}