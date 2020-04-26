<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * NoShardAvailableException
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 
 */
class NoShardAvailableException extends ServerErrorResponseException implements ElasticsearchException
{
}
