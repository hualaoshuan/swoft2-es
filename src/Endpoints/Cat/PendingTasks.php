<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cat;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Pendingtasks
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 
 */
class PendingTasks extends AbstractEndpoint
{
    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_cat/pending_tasks";

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
