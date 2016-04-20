<?php


namespace DoApiLayer\Model;


class Feature implements RestModel
{
    /**
     * @var string
     */
    private $name;

    public function fromArray($data)
    {
        $this->name = $data;
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}