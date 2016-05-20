<?php


namespace DoApiLayer\Model;


class Feature implements RestModel
{
    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function fromArray($data)
    {
        $this->name = $data;
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}