<?php

declare(strict_types = 1);
/**
 * User: zach
 * Date: 01/20/2014
 * Time: 14:34:49 pm
 */

namespace Hualaoshuan\Elasticsearch\Endpoints\Indices\Upgrade;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class Post
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Indices
 
 */

class Post extends AbstractEndpoint
{

    /**
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $uri   = "/_upgrade";

        if (isset($index) === true) {
            $uri = "/$index/_upgrade";
        }


        return $uri;
    }


    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'wait_for_completion',
            'only_ancient_segments',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
        );
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
