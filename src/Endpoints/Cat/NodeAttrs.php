<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cat;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class NodeAttrs
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 
 */
class NodeAttrs extends AbstractEndpoint
{
    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_cat/nodeattrs";

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'local',
            'master_timeout',
            'h',
            'help',
            'v',
            's',
            'format',
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
