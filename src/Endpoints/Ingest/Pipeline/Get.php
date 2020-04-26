<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Ingest\Pipeline;

use Hualaoshuan\Elasticsearch\Common\Exceptions;
use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ingest
 
 */
class Get extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->id) !== true) {
            return '/_ingest/pipeline/*';
        }

        $id = $this->id;

        return "/_ingest/pipeline/$id";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'master_timeout'
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
