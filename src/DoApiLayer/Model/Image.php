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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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

    /**
     * @return string
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param string $distribution
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return boolean
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param boolean $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return array
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param array $regions
     */
    public function setRegions($regions)
    {
        $this->regions = $regions;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getMinDiskSize()
    {
        return $this->minDiskSize;
    }

    /**
     * @param int $minDiskSize
     */
    public function setMinDiskSize($minDiskSize)
    {
        $this->minDiskSize = $minDiskSize;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getSizeInGb()
    {
        return $this->sizeInGb;
    }

    /**
     * @param int $sizeInGb
     */
    public function setSizeInGb($sizeInGb)
    {
        $this->sizeInGb = $sizeInGb;
    }

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