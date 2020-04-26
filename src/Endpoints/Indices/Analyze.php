<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Indices;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class Analyze
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 
 */
class Analyze extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $uri   = "/_analyze";

        if (isset($index) === true) {
            $uri = "/$index/_analyze";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'analyzer',
            'field',
            'filter',
            'index',
            'prefer_local',
            'text',
            'tokenizer',
            'format',
            'char_filter',
            'explain',
            'attributes',
            'format'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
