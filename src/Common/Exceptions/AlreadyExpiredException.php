<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * AlreadyExpiredException, thrown when a document has already expired
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 */
class AlreadyExpiredException extends \Exception implements ElasticsearchException
{
}
