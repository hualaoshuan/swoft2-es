<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cluster;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class State
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 
 */
class State extends AbstractEndpoint
{
    /**
     * Limit the information returned to the specified metrics
     *
     * @var string
     */
    private $metric;

    /**
     * @param string|string[] $metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        if (isset($metric) !== true) {
            return $this;
        }

        if (is_array($metric) === true) {
            $metric = implode(",", $metric);
        }

        $this->metric = $metric;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $metric = $this->metric;
        $uri   = "/_cluster/state";

        if (isset($metric) === true && isset($index) === true) {
            $uri = "/_cluster/state/$metric/$index";
        } elseif (isset($metric) === true) {
            $uri = "/_cluster/state/$metric";
        }

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
            'flat_settings',
            'index_templates',
            'expand_wildcards',
            'ignore_unavailable',
            'allow_no_indices'
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
