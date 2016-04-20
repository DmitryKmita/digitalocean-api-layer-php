<?php


namespace DoApiLayer\Service;

class ApiService
{
    /**
     * Internal Services
     *
     * @var array
     */
    public $internalServices = [];

    /**
     * Adds Internal service
     *
     * @param $name
     * @param $service
     */
    public function addInternalService($name, $service)
    {
        $this->internalServices[$name] = $service;
    }

    /**
     * @param $name
     * @return bool
     */
    public function getService($name)
    {
        if (!isset($this->internalServices[$name])) {
            return false;
        }
        return $this->internalServices[$name];
    }

    /**
     * @return AccountService
     */
    public function getAccountService()
    {
        return $this->getService(AccountService::NAME);
    }

    /**
     * @return DropletService
     */
    public function getDropletService()
    {
        return $this->getService(DropletService::NAME);
    }
}