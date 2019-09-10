<?php

namespace App\Model;

use Core\Database\Database;

class AdGroup extends Database
{
    /** @var integer */
    private $id;
    /** @var string */
    private $name;
    /** @var AdCampaign */
    private $adCampaignId;

    /**
     * @param string $groupName
     * @param string $campaignName
     * @return AdGroup
     */
    public function getOneByGroupName($groupName, $campaignName)
    {
        return $data;
    }

    /**
     * @param string $groupName
     * @return AdGroup[]
     */
    public function getMultipleByGroupName($groupName)
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

    /**
     * @return AdCampaign
     */
    public function getAdCampaignId()
    {
        return $this->adCampaignId;
    }

    /**
     * @param AdCampaign $adCampaignId
     */
    public function setAdCampaignId($adCampaignId)
    {
        $this->adCampaignId = $adCampaignId;
    }
}
