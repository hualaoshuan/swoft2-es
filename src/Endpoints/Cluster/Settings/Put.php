<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cluster\Settings;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster\Settings
 
 */
class Put extends AbstractEndpoint
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
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'PUT';
    }
}
