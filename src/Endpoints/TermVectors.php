<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints;

use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class TermVectors
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 
 */
class TermVectors extends AbstractEndpoint
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
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for TermVectors'
            );
        }
        if (isset($this->type) !== true) {
            throw new Exceptions\RuntimeException(
                'type is required for TermVectors'
            );
        }
        if (isset($this->id) !== true && isset($this->body['doc']) !== true) {
            throw new Exceptions\RuntimeException(
                'id or doc is required for TermVectors'
            );
        }

        $index = $this->index;
        $type  = $this->type;
        $id    = $this->id;
        $uri   = "/$index/$type/_termvectors";

        if ($id !== null) {
            $uri = "/$index/$type/$id/_termvectors";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'term_statistics',
            'field_statistics',
            'fields',
            'offsets',
            'positions',
            'payloads',
            'preference',
            'routing',
            'parent',
            'realtime'
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
