<?php

namespace DoApiLayer\Factory;

use Buzz\Browser;
use Buzz\Client\Curl;
use DoApiLayer\Config\Config;
use DoApiLayer\Service\AccountService;
use DoApiLayer\Service\ApiService;
use DoApiLayer\Service\DropletService;

class ApiServiceFactory
{
    /**
     * @return ApiService
     */
    public function getInstance(Config $config)
    {
        $curlClient = new Curl();
        $buzz = new Browser($curlClient);#

        $host = $config->getConfig('host');
        $token = $config->getConfig('token');

        $accountService = new AccountService($buzz, $host, $token);
        $dropletService = new DropletService($buzz, $host, $token);

        $apiService = new ApiService();
        $apiService->addInternalService(AccountService::NAME, $accountService);
        $apiService->addInternalService(DropletService::NAME, $dropletService);

        return $apiService;
    }
}