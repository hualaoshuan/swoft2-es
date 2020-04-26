<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints;

use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class FieldStats
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 
 */
class FieldStats extends AbstractEndpoint
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
        $uri   = "/_field_stats";

        if (isset($index) === true) {
            $uri = "/$index/_field_stats";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'fields',
            'level',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'fields'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}
