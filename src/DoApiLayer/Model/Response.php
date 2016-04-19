<?php


namespace DoApiLayer\Model;


class Response
{
    private $data;

    private $rateLimit;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getRateLimit()
    {
        return $this->rateLimit;
    }

    /**
     * @param mixed $rateLimit
     */
    public function setRateLimit($rateLimit)
    {
        $this->rateLimit = $rateLimit;
    }
}