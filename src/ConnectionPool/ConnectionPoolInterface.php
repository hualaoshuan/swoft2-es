<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\ConnectionPool;

use Hualaoshuan\Elasticsearch\Connections\ConnectionInterface;

/**
 * ConnectionPoolInterface
 *
 * @category Elasticsearch
 * @package  Elasticsearch\ConnectionPool
 
 */
interface ConnectionPoolInterface
{
    /**
     * @param bool $force
     *
     * @return ConnectionInterface
     */
    public function nextConnection($force = false);

    /**
     * @return void
     */
    public function scheduleCheck();
}
