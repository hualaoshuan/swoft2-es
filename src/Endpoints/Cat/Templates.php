<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cat;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Templates
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 
 */
class Templates extends AbstractEndpoint
{
    private $name;

    /**
     * @param string $name
     * @return Templates
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        if (isset($this->name)) {
            return "/_cat/templates/{$this->name}";
        } else {
            return "/_cat/templates";
        }
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'format',
            'node_id',
            'actions',
            'detailed',
            'parent_node',
            'parent_task',
            'h',
            'help',
            'v',
            's',
            'local',
            'master_timeout',
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
