<?php


namespace DoApiLayer\Model;


class Droplet implements RestModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $memory;

    /**
     * @var int
     */
    private $vcpus;

    /**
     * @var int
     */
    private $disk;

    /**
     * @var boolean
     */
    private $locked;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Kernel
     */
    private $kernel;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var Feature[]
     */
    private $features;

    /**
     * @var mixed
     */
    private $backupIds;

    /**
     * @var mixed
     */
    private $nextBackUpWindow;

    /**
     * @var mixed
     */
    private $snapshopIds;

    /**
     * @var Image
     */
    private $image;

    /**
     * @var mixed
     */
    private $drives;

    /**
     * @var mixed
     */
    private $size;

    /**
     * @var string
     */
    private $sizeSlug;

    /**
     * @var mixed
     */
    private $networks;

    /**
     * @var mixed
     */
    private $region;

    /**
     * @var array
     */
    private $tags;

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
     * @return int
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    /**
     * @return int
     */
    public function getVcpus()
    {
        return $this->vcpus;
    }

    /**
     * @param int $vcpus
     */
    public function setVcpus($vcpus)
    {
        $this->vcpus = $vcpus;
    }

    /**
     * @return int
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * @param int $disk
     */
    public function setDisk($disk)
    {
        $this->disk = $disk;
    }

    /**
     * @return boolean
     */
    public function isLocked()
    {
        return $this->locked;
    }

    /**
     * @param boolean $locked
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return Kernel
     */
    public function getKernel()
    {
        return $this->kernel;
    }

    /**
     * @param Kernel $kernel
     */
    public function setKernel($kernel)
    {
        $this->kernel = $kernel;
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
     * @return Feature[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param Feature[] $features
     */
    public function setFeatures($features)
    {
        $this->features = $features;
    }

    /**
     * @return mixed
     */
    public function getBackupIds()
    {
        return $this->backupIds;
    }

    /**
     * @param mixed $backupIds
     */
    public function setBackupIds($backupIds)
    {
        $this->backupIds = $backupIds;
    }

    /**
     * @return mixed
     */
    public function getNextBackUpWindow()
    {
        return $this->nextBackUpWindow;
    }

    /**
     * @param mixed $nextBackUpWindow
     */
    public function setNextBackUpWindow($nextBackUpWindow)
    {
        $this->nextBackUpWindow = $nextBackUpWindow;
    }

    /**
     * @return mixed
     */
    public function getSnapshopIds()
    {
        return $this->snapshopIds;
    }

    /**
     * @param mixed $snapshopIds
     */
    public function setSnapshopIds($snapshopIds)
    {
        $this->snapshopIds = $snapshopIds;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDrives()
    {
        return $this->drives;
    }

    /**
     * @param mixed $drives
     */
    public function setDrives($drives)
    {
        $this->drives = $drives;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSizeSlug()
    {
        return $this->sizeSlug;
    }

    /**
     * @param string $sizeSlug
     */
    public function setSizeSlug($sizeSlug)
    {
        $this->sizeSlug = $sizeSlug;
    }

    /**
     * @return mixed
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @param mixed $networks
     */
    public function setNetworks($networks)
    {
        $this->networks = $networks;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @inheritdoc
     */
    public function fromArray($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->memory = $data['memory'];
        $this->vcpus = $data['vcpus'];
        $this->disk = $data['disk'];
        $this->locked = $data['locked'];
        $this->status = $data['status'];

        $kernel = new Kernel();
        $this->kernel = $kernel->fromArray($data['kernel']);

        $this->createdAt = new \DateTime($data['created_at']);

        $features = [];
        foreach ($data['features'] as $feature) {
            $singleFeature = new Feature();
            $features[] = $singleFeature->fromArray($feature);
        }
        $this->features = $features;

        $this->backupIds = $data['backup_ids'];
        $this->nextBackUpWindow = $data['next_backup_window'];
        $this->snapshopIds = $data['snapshot_ids'];

        $image = new Image();
        $this->image = $image->fromArray($data['image']);

        $this->drives = $data['drives'];
        $this->size = $data['size'];
        $this->sizeSlug = $data['size_slug'];
        $this->networks = $data['networks'];
        $this->region = $data['region'];
        $this->tags = $data['tags'];
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return [
            'name' => $this->name,
            'region' => $this->region,
            'size' => $this->sizeSlug,
            'image' => $this->image->getName(),
            'ssh_keys' => null,
            'backups' => false,
            'ipv6' => true,
            'user_data' => null,
            'private_networking' => null
        ];
    }
}