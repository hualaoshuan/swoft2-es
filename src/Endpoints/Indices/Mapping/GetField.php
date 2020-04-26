<?php

declare(strict_types = 1);

namespace Hualaoshuan\Elasticsearch\Endpoints\Indices\Mapping;

use Hualaoshuan\Elasticsearch\Endpoints\AbstractEndpoint;
use Hualaoshuan\Elasticsearch\Common\Exceptions;

/**
 * Class GetField
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices\Mapping
 
 */
class GetField extends AbstractEndpoint
{
    /** @var  string */
    private $fields;

    /**
     * @param string|array $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        if (isset($fields) !== true) {
            return $this;
        }

        if (is_array($fields) === true) {
            $fields = implode(",", $fields);
        }

        $this->fields = $fields;

        return $this;
    }

    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->fields) !== true) {
            throw new Exceptions\RuntimeException(
                'fields is required for Get Field Mapping'
            );
        }
        $uri = $this->getOptionalURI('_mapping/field');

        return $uri.'/'.$this->fields;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'include_defaults',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'local',
            'include_type_name'
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
