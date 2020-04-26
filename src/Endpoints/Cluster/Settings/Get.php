<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cluster\Settings;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster\Settings
 
 */

class Get extends AbstractEndpoint
{
    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_cluster/settings";

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'flat_settings',
            'master_timeout',
            'timeout',
            'include_defaults'
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
