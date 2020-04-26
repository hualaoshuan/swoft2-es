<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Cat;

use Hualaoshuan\Elasticsearch\Common\Exceptions\RuntimeException;
use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Snapshots
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 
 */
class Snapshots extends AbstractEndpoint
{
    private $repository;

    /**
     * @param string $repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        if (isset($repository) !== true) {
            return $this;
        }

        $this->repository = $repository;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $repository = $this->repository;
        if (isset($this->repository) === true) {
            return "/_cat/snapshots/$repository/";
        }

        return "/_cat/snapshots/";
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
