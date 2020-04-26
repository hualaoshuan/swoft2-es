<?php

declare(strict_types = 1);
/**
 * Class RegisteredNamespaceInterface
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Namespaces
 
 */

namespace Hualaoshuan\Elasticsearch\Namespaces;

use Hualaoshuan\Elasticsearch\Serializers\SerializerInterface;
use Hualaoshuan\Elasticsearch\Transport;

interface NamespaceBuilderInterface
{
    /**
     * Returns the name of the namespace.  This is what users will call, e.g. the name
     * "foo" will be invoked by the user as `$client->foo()`
     * @return string
     */
    public function getName();

    /**
     * Returns the actual namespace object which contains your custom methods. The transport
     * and serializer objects are provided so that your namespace may do whatever custom
     * logic is required.
     *
     * @param Transport $transport
     * @param SerializerInterface $serializer
     * @return Object
     */
    public function getObject(Transport $transport, SerializerInterface $serializer);
}
