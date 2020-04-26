<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\ConnectionPool\Selectors;

use Hualaoshuan\Elasticsearch\Connections\ConnectionInterface;

/**
 * Class StickyRoundRobinSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch\ConnectionPool\Selectors\ConnectionPool
 
 */
class StickyRoundRobinSelector implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    /**
     * @var int
     */
    private $currentCounter = 0;

    /**
     * Use current connection unless it is dead, otherwise round-robin
     *
     * @param ConnectionInterface[] $connections Array of connections to choose from
     *
     * @return ConnectionInterface
     */
    public function select($connections)
    {
        /** @var ConnectionInterface[] $connections */
        if ($connections[$this->current]->isAlive()) {
            return $connections[$this->current];
        }

        $this->currentCounter += 1;
        $this->current = $this->currentCounter % count($connections);

        return $connections[$this->current];
    }
}
