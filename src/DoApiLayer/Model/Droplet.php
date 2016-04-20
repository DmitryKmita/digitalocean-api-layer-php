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

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}