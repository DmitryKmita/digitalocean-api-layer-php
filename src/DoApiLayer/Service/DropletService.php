<?php


namespace DoApiLayer\Service;


use DoApiLayer\Model\Droplet;
use DoApiLayer\Model\Response;

class DropletService extends RESTService
{
    const NAME = 'app.service.droplet';

    /**
     * Fet All Droplets info
     *
     * @return Response
     */
    public function getAllDroplets()
    {
        $url = $this->host . '/droplets';
        $data = $this->get($url);
        $droplets = [];
        foreach ($data['droplets'] as $droplet) {
            $singleDroplet = new Droplet();
            $singleDroplet->fromArray($droplet);
            $droplets[] = $singleDroplet;
        }

        $response = new Response();
        $response->setData($droplets);
        return $response;
    }
}