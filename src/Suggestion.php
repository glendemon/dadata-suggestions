<?php

namespace DadataSuggestions;


class Suggestion
{
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
     * Suggestion constructor.
     * @param array|null $params
     */
    public function __construct(array $params = null)
    {
        if ($params) {
            if (array_key_exists('value', $params)) {
                $this->setValue($params['value']);
            }
            if (array_key_exists('unrestricted_value', $params)) {
                $this->setUnrestrictedValue($params['unrestricted_value']);
            }
            if (array_key_exists('data', $params)) {
//                $this->setData($params['data']);
            }
        }
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

}