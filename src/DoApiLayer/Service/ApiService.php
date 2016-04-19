<?php


namespace DoApiLayer\Service;


use Buzz\Browser;
use DoApiLayer\Config\Config;
use DoApiLayer\Model\Account;
use DoApiLayer\Model\Response;

class ApiService
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var Browser
     */
    private $buzz;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $token;

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param Config $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @return Browser
     */
    public function getBuzz()
    {
        return $this->buzz;
    }

    /**
     * @param Browser $buzz
     */
    public function setBuzz($buzz)
    {
        $this->buzz = $buzz;
    }

    /**
     * ApiService constructor.
     * @param $config
     */
    public function __construct(Config $config, Browser $browser)
    {
        $this->config = $config;
        $this->buzz = $browser;
        $this->token = $config->getConfig('token');
        $this->host = $config->getConfig('host');
    }

    public function preSetHeader()
    {
        return ['Authorization' => "Bearer {$this->token}", 'Content-Type' => 'application/json'];
    }

    /**
     * Get Account Info
     *
     * @return Response
     */
    public function getAccountInfo()
    {
        $url = $this->host . '/account';
        $data = $this->get($url);

        $account = new Account();
        $account->fromArray($data['account']);

        $response = new Response();
        $response->setData($account);

        return $response;
    }

    /**
     * Send Internal GET Request
     *
     * @param $url
     * @param array $headers
     * @return mixed
     */
    private function get($url, $headers = [])
    {
        $headers = array_merge($headers, $this->preSetHeader());
        $response = $this->buzz->get($url, $headers);
        return json_decode($response->getContent(), true);
    }
}