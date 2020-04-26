<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Common\Exceptions\Curl;

use Hualaoshuan\Elasticsearch\Common\Exceptions\ElasticsearchException;
use Hualaoshuan\Elasticsearch\Common\Exceptions\TransportException;

/**
 * Class CouldNotResolveHostException
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions\Curl
 
  */
class CouldNotResolveHostException extends TransportException implements ElasticsearchException
{
}
