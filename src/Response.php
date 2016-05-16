<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 11.05.2016
 * Time: 16:45
 */

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
     * @var string A single line (as shown in the list of suggestions)
     */
    protected $value;

    /**
     * @var string A single line (full)
     */
    protected $unrestricted_value;

    /**
     * @var ResponseData
     */
    protected $data;

    /**
     * Response constructor.
     * @param ResponseInterface $responseInterface
     */
    public function __construct(ResponseInterface $responseInterface)
    {
        $this->setRaw($responseInterface);
        $this->setStatus($this->getRaw()->getStatusCode());
        $body = $this->getRaw()->getBody();
        $body->getContents();
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
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getUnrestrictedValue()
    {
        return $this->unrestricted_value;
    }

    /**
     * @param string $unrestricted_value
     */
    public function setUnrestrictedValue($unrestricted_value)
    {
        $this->unrestricted_value = $unrestricted_value;
    }

    /**
     * @return ResponseData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ResponseData $data
     */
    public function setData(ResponseData $data)
    {
        $this->data = $data;
    }

    /**
     * @return ResponseInterface
     */
    public function getRaw()
    {
        return $this->raw;
    }

    protected function setRaw(ResponseInterface $data)
    {
        $this->raw = $data;
    }
}