<?php

namespace DoApiLayer\Config;

use Symfony\Component\Yaml\Parser;

class Config implements ConfigInterface
{
    /**
     * @var array
     */
    public static $config = [];

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
     * Read Config from Yaml
     *
     * @param $filepath
     */
    public function fromYaml($filepath)
    {
        $yaml = new Parser();
        $data = $yaml->parse(file_get_contents($filepath));
        self::setConfig($data['config']);
    }

    /**
     * @param array $config
     */
    public static function setConfig($config)
    {
        self::$config = $config;
    }
}