<?php

namespace DoApiLayer\Factory;

use Buzz\Browser;
use Buzz\Client\Curl;
use DoApiLayer\Config\Config;
use DoApiLayer\Service\ApiService;

class ApiServiceFactory
{
    /**
     * @return ApiService
     */
    public function getInstance(Config $config)
    {
        $curlClient = new Curl();
        $buzz = new Browser($curlClient);
        return new ApiService($config, $buzz);
    }
}