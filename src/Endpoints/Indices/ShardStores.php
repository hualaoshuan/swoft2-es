<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Indices;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class ShardStores
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Indices
 
 */

class ShardStores extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $uri   = "/_shard_stores";

        if (isset($index) === true) {
            $uri = "/$index/_shard_stores";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'status',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'operation_threading'
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
