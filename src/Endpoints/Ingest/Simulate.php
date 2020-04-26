<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Ingest;

use Hualaoshuan\Elasticsearch\Common\Exceptions;
use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Simulate
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ingest
 
 */
class Simulate extends AbstractEndpoint
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
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->id) === true) {
            return "/_ingest/pipeline/{$this->id}/_simulate";
        }
        return "/_ingest/pipeline/_simulate";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'verbose',
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
