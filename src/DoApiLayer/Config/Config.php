<?php

namespace DoApiLayer\Config;

class Config implements ConfigInterface
{
    /**
     * @var array
     */
    public static $config = [
        'host' => 'https://api.digitalocean.com/v2',
        'token' => ''
    ];

    /**
     * @inheritdoc
     * @param string $key
     * @return mixed
     */
    public function getConfig($key, $default = false)
    {
        if (!isset(self::$config[$key])) {
            return $default;
        }
        return self::$config[$key];
    }

    /**
     * @param array $config
     */
    public static function setConfig($config)
    {
        self::$config = $config;
    }
}