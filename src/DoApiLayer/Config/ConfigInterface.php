<?php

namespace DoApiLayer\Config;

interface ConfigInterface
{
    /**
     * Get Config by Key
     *
     * @param $key
     * @param $default
     */
    public function getConfig($key, $default = false);
}