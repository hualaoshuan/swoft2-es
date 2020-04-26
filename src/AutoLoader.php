<?php declare(strict_types=1);

namespace Hualaoshuan\Elasticsearch;


use Swoft\Helper\ComposerJSON;
use Swoft\SwoftComponent;
use function dirname;
use Hualaoshuan\Elasticsearch\Config\EsPoolConfig;

/**
 * Class AutoLoader
 */
class AutoLoader extends SwoftComponent
{
    /**
     * @return array
     */
    public function beans(): array
    {
        $config =  [
            'mongo' => [
                'class' => EsPoolConfig::class,
                'host' => config('es.host'),
                'port' => config('es.port'),
                'userName' => config('es.userName'),
                'password' => config('es.password'),
                'timeout' => config('es.timeout'),
            ]
        ];
        
        return $config;
    }

    /**
     * Get namespace and dir
     *
     * @return array
     * [
     *     namespace => dir path
     * ]
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * Metadata information for the component.
     *
     * @return array
     * @see ComponentInterface::getMetadata()
     */
    public function metadata(): array
    {
        $jsonFile = dirname(__DIR__) . '/composer.json';

        return ComposerJSON::open($jsonFile)->getMetadata();
    }
}
