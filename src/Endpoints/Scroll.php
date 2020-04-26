<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints;

use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class Scroll
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 
 */
class Scroll extends AbstractEndpoint
{

    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $scroll
     *
     * @return $this
     */
    public function setScroll($scroll)
    {
        if (isset($scroll) !== true) {
            return $this;
        }

        $this->body['scroll'] = $scroll;

        return $this;
    }

    /**
     * @param string $scroll_id
     *
     * @return $this
     */
    public function setScrollId($scroll_id)
    {
        if (isset($scroll_id) !== true) {
            return $this;
        }

        $this->body['scroll_id'] = $scroll_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_search/scroll";
        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'scroll',
            'rest_total_hits_as_int'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
