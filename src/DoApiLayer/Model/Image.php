<?php

namespace DoApiLayer\Model;

class Image implements RestModel
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
    protected $distribution;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @var boolean
     */
    protected $public;

    /**
     * @var array
     */
    protected $regions;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var int
     */
    protected $minDiskSize;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $sizeInGb;

    /**
     * @inheritdoc
     */
    public function fromArray($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->distribution = $data['distribution'];
        $this->slug = $data['slug'];
        $this->public = (bool) $data['public'];
        $this->regions = $data['regions'];
        $this->createdAt = new \DateTime($data['created_at']);
        $this->minDiskSize = $data['min_disk_size'];
        $this->type = $data['type'];
        $this->sizeInGb = $data['size_gigabytes'];
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}