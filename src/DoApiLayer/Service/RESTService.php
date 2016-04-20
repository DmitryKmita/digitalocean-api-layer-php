<?php


namespace DoApiLayer\Service;


use Buzz\Browser;
use Buzz\Exception\RequestException;

abstract class RESTService
{
    /**
     * @var Browser
     */
    protected $buzz;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $token;

    /**
     * @return Browser
     */
    protected function getBuzz()
    {
        return $this->buzz;
    }

    /**
     * @param Browser $buzz
     */
    protected function setBuzz($buzz)
    {
        $this->buzz = $buzz;
    }

    /**
     * @return string
     */
    protected function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    protected function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    protected function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    protected function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * RESTService constructor.
     *
     * @param Browser $buzz
     * @param string  $host
     * @param string  $token
     */
    public function __construct(Browser $buzz, $host, $token)
    {
        $this->buzz = $buzz;
        $this->host = $host;
        $this->token = $token;
    }

    /**
     * Send Internal GET Request
     *
     * @param $url
     * @param array $headers
     * @return mixed
     */
    protected function get($url, $headers = [])
    {
        $headers = array_merge($headers, $this->preSetHeader());
        $response = $this->buzz->get($url, $headers);
        $data = json_decode($response->getContent(), true);
        if (isset($data['id'], $data['message'])) {
            throw new RequestException($data['message']);
        }
        return $data;
    }

    /**
     * Send Internal POST Request
     *
     * @param $url
     * @param $data
     * @param $headers
     * @return mixed
     */
    protected function post($url, $data = [], $headers = [])
    {
        $headers = array_merge($headers, $this->preSetHeader());
        $response = $this->buzz->post($url, $headers, json_encode($data));
        $data = json_decode($response->getContent(), true);
        if (isset($data['id'], $data['message'])) {
            throw new RequestException($data['message']);
        }
        return $data;
    }

    /**
     * Set Required headers by Digital Ocean
     *
     * @return array
     */
    protected function preSetHeader()
    {
        return ['Authorization' => "Bearer {$this->token}", 'Content-Type' => 'application/json'];
    }
}