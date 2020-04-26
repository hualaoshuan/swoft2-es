<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Indices;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class ValidateQuery
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 
 */
class ValidateQuery extends AbstractEndpoint
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
        $type = $this->type;
        $uri   = "/_validate/query";

        if (isset($index) === true && isset($type) === true) {
            $uri = "/$index/$type/_validate/query";
        } elseif (isset($index) === true) {
            $uri = "/$index/_validate/query";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'explain',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'operation_threading',
            'source',
            'q',
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
