<?php


namespace DoApiLayer\Model;


interface RestModel
{
    /**
     * @param $data array
     *
     * @return self
     */
    public function fromArray($data);

    /**
     * @return array
     */
    public function toArray();
}