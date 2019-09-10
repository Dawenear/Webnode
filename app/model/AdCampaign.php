<?php

namespace App\Model;

use Core\Database\Database;

class AdCampaign extends Database
{
    /** @var integer */
    private $id;
    /** @var string */
    private $name;

    /**
     * @param string $name
     * @return AdCampaign
     */
    public function getOneByCampaignName($name)
    {
        return $data;
    }

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
}
