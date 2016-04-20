<?php


namespace DoApiLayer\Model;


class Kernel implements RestModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $version;

    /**
     * @inheritdoc
     */
    public function fromArray($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->version = $data['version'];
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}