<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Ingest\Pipeline;

use Hualaoshuan\Elasticsearch\Common\Exceptions;
use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ProcessorGrok
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ingest
 
 */
class ProcessorGrok extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        return "/_ingest/processor/grok";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return [];
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}
