<?php


namespace DoApiLayer\Model;


class Account implements RestModel
{
    /**
     * @var int
     */
    private $dropletLimit;

    /**
     * @var int
     */
    private $floatingIpLimit;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $uuid;

    /**
     * @var bool
     */
    private $emailVerified;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $statusMessage;

    /**
     * @return int
     */
    public function getDropletLimit()
    {
        return $this->dropletLimit;
    }

    /**
     * @param int $dropletLimit
     */
    public function setDropletLimit($dropletLimit)
    {
        $this->dropletLimit = $dropletLimit;
    }

    /**
     * @return int
     */
    public function getFloatingIpLimit()
    {
        return $this->floatingIpLimit;
    }

    /**
     * @param int $floatingIpLimit
     */
    public function setFloatingIpLimit($floatingIpLimit)
    {
        $this->floatingIpLimit = $floatingIpLimit;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param int $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return boolean
     */
    public function isEmailVerified()
    {
        return $this->emailVerified;
    }

    /**
     * @param boolean $emailVerified
     */
    public function setEmailVerified($emailVerified)
    {
        $this->emailVerified = $emailVerified;
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
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * @inheritdoc
     */
    public function fromArray($data)
    {
        $this->dropletLimit = $data['droplet_limit'];
        $this->floatingIpLimit = $data['floating_ip_limit'];
        $this->email = $data['email'];
        $this->uuid = $data['uuid'];
        $this->emailVerified = (bool) $data['email_verified'];
        $this->status = $data['status'];
        $this->statusMessage = $data['status_message'];
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}