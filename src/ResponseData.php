<?php

namespace DadataSuggestions;

abstract class ResponseData
{
    /**
     * @param string $type
     * @param array|null $params
     * @return ResponseData
     */
    public static function getInstance($type, array $params = null)
    {
        $type = 'DadataSuggestions\Data\\' . ucfirst($type);
        return new $type($params);
    }

    /**
     * ResponseData constructor.
     * @param array|null $params
     */
    public function __construct(array $params = null)
    {
        foreach ($params as $key => $value) {
            $this->$key = $value;
        }
    }
}