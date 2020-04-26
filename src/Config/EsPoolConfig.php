<?php

namespace Hualaoshuan\Elasticsearch\Config;


class EsPoolConfig
{
    /**
     * @var string Es连接 host
     */
    protected $host;

    /**
     * @var int Es连接端口，默认 9200
     */
    protected $port = 9200;

    /**
     * @var mixed Es用户名
     */
    protected $userName;

    /**
     * @var mixed Es连接密码
     */
    protected $password;

    /**
     * @var int 
     */
    protected $timeout = 2;

    
    public function __construct()
    {
        $this->host = config('es.host');
        $this->port = config('es.port');
        $this->userName = config('es.userName');
        $this->password = config('es.password');
        $this->timeout = config('es.timeout');
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
    }
    
    
}