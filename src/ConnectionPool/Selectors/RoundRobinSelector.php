<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\ConnectionPool\Selectors;

use Hualaoshuan\Elasticsearch\Connections\ConnectionInterface;

/**
 * Class RoundRobinSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch\ConnectionPool\Selectors\ConnectionPool
 
 */
class RoundRobinSelector implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    /**
     * Select the next connection in the sequence
     *
     * @param  ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     *
     * @return \Elasticsearch\Connections\ConnectionInterface
     */
    public function select($connections)
    {
        $returnConnection = $connections[$this->current % count($connections)];

        $this->current += 1;

        return $returnConnection;
    }
}
