<?php

namespace App\Model;

use Core\Database\Database;

class AdKeyword extends Database
{
    /** @var integer */
    private $id;
    /** @var AdGroup */
    private $adGroupId;
    /** @var \DateTime */
    private $date;
    /**
     * @var string
     * saved as string in case that currency is used (e.g. 350 CZK)
     */
    private $keyword;
    /** @var integer */
    private $adViews;
    /** @var integer */
    private $adClicks;
    /** @var integer */
    private $price;
    /** @var Currency */
    private $currencyID;
    /** @var integer */
    private $conversionNo;

    /**
     * @param int $adGroupId
     * @param \DateTime $date
     * @param string $keyword
     * @param integer $adViews
     * @param int $adClicks
     * @param int $price
     * @param int $currency
     * @param int $conversionNo
     */
    public function setNewKeyword($adGroupId, $date, $keyword, $adViews, $adClicks, $price, $currency, $conversionNo)
    {
        $this->setAdGroupId($adGroupId);
        $this->setDate($date);
        $this->setKeyword($keyword);
        $this->setAdViews($adViews);
        $this->setAdClicks($adClicks);
        $this->setPrice($price);
        $this->setConversionNo($conversionNo);
    }

    /**
     * @param string $keyword
     * @return AdKeyword[]
     */
    public function getByKeyword($keyword)
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

    public function saveOrUpdateKeyword()
    {
        // Save or update keyword into DB
    }

    /**
     * @param int $id
     */
    private function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return AdGroup
     */
    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param AdGroup $adGroupId
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId = $adGroupId;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return int
     */
    public function getAdViews()
    {
        return $this->adViews;
    }

    /**
     * @param int $adViews
     */
    public function setAdViews($adViews)
    {
        $this->adViews = $adViews;
    }

    /**
     * @return int
     */
    public function getAdClicks()
    {
        return $this->adClicks;
    }

    /**
     * @param int $adClicks
     */
    public function setAdClicks($adClicks)
    {
        $this->adClicks = $adClicks;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currencyID->getName();
    }

    /**
     * @param string $currencyID
     */
    public function setCurrency($currencyID)
    {
        $this->currencyID->setName($currencyID);
    }

    /**
     * @return int
     */
    public function getConversionNo()
    {
        return $this->conversionNo;
    }

    /**
     * @param int $conversionNo
     */
    public function setConversionNo($conversionNo)
    {
        $this->conversionNo = $conversionNo;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->getAdGroupId()->getName();
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->getAdGroupId()->getAdCampaignId()->getName();
    }
}
