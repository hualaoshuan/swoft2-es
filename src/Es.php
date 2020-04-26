<?php

namespace Hualaoshuan\Elasticsearch;

use Hualaoshuan\Elasticsearch\CoroutineHandler;
use Hualaoshuan\Elasticsearch\ClientBuilder;

class Es
{
    
    public static function getClient () 
    {
        $handler = new CoroutineHandler(['timeout' => config('es.timeout')]);

        $client = ClientBuilder::create()
            ->setHosts([config('es.host')])
            ->setUser(config('es.userName'))
            ->setPass(config('es.password'))
            ->setHandler($handler)
            ->build();

        return $client;
        
    }
}