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

    /**
     * Get Single Droplet By ID
     *
     * @param $id
     * @return Response
     */
    public function getDropletById($id)
    {
        $url = $this->host . '/droplets/' . $id;
        $data = $this->get($url);
        $droplet = new Droplet();
        $droplet->fromArray($data['droplet']);

        $response = new Response();
        $response->setData($droplet);
        return $response;
    }

    /**
     * Get Single Droplet By ID
     *
     * @param string $tag
     * @return Response
     */
    public function getDropletsByTag($tag)
    {
        $url = $this->host . '/droplets?tag_name=' . $tag;
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

    /**
     * Create a new droplet
     *
     * @param Droplet $droplet
     * @return Response
     */
    public function createDroplet(Droplet $droplet)
    {
        $url = $this->host . '/droplets';

        $data = $this->post($url, $droplet->toArray());
        $droplet = new Droplet();
        $droplet->fromArray($data['droplet']);

        $response = new Response();
        $response->setData($droplet);
        return $response;
    }

    /**
     * Destroy a droplet
     *
     * @param int $id
     * @return Response
     */
    public function destroyDroplet($id)
    {
        $url = $this->host . '/droplets/' . $id;

        $data = $this->delete($url);
        if (null === $data) {
            return true;
        }
        return false;
    }
}