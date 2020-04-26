<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cluster\Nodes;

/**
 * Class ReloadSecureSettings
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster\Nodes
 
 */
class ReloadSecureSettings extends AbstractNodesEndpoint
{
    /**
     * @return string
     */
    public function getURI()
    {
        $nodeId = $this->nodeID;
        $uri   = "/_nodes/reload_secure_settings";

        if (isset($nodeId) === true) {
            $uri = "/_nodes/$nodeId/reload_secure_settings";
        }

        return $uri;
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
        return 'POST';
    }
}
