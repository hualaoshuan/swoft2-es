<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Indices\Validate;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class Query
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices\Validate
 
 */
class Query extends AbstractEndpoint
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
        return $this->getOptionalURI('_validate/query');
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'explain',
            'ignore_indices',
            'operation_threading',
            'source',
            'q',
            'df',
            'default_operator',
            'analyzer',
            'analyze_wildcard',
            'lenient',
            'lowercase_expanded_terms'
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
