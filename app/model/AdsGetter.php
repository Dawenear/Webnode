<?php

namespace App\Model;

use App\Exceptions\UpdateAdsFromServerError;
use Core\Libraries\Curl;

class AdsGetter
{
    /** @var AdServer */
    private $adServer;

    /**
     * AdsGetter constructor.
     */
    public function __construct()
    {
        $this->adServer = new AdServer();
    }

    public function getAds()
    {
        $servers = $this->adServer->getAll();
        foreach ($servers as $server) {
            try {
                $this->getAdsFromServerAndSaveToDB($server);
            } catch (UpdateAdsFromServerError $error) {
                /*
                 * Log invalid try
                 * Throw error
                 */
            }
        }
    }

    /**
     * @param AdServer $server
     * @throws UpdateAdsFromServerError
     * @throws \Core\Exceptions\DatabaseError
     */
    private function getAdsFromServerAndSaveToDB($server)
    {
        $curl = new Curl($server->getUrl());
        $curl->setOptions($server->getOptions());
        try {
            $response = $curl->execute();
        } catch (\Exception $e) {
            throw new UpdateAdsFromServerError();
        }

        $data = $this->processResponse($server, $response);

        $data->saveOrUpdateKeyword();
    }

    /**
     * @param AdServer $server
     * @param string $response
     * @return AdKeyword
     * @throws \Core\Exceptions\DatabaseError
     */
    private function processResponse(AdServer $server, $response)
    {
        // do some black magic based on responseType and responseStructure, process it into valid  AdKeyword format
        $data = new AdKeyword();
        $structure = $server->getReturnStructure();
        /*
         * call functions related to column to process it into valid format
         * for example for date there will be which format is used in DB and called method $this->>processDate($date, $structure);
         */
        $data->setNewKeyword('...');
        return $data;
    }

    /**
     * @param string $date
     * @param string $format
     * @return \DateTime
     */
    private function processDate($date, $format)
    {
        return $date;
    }

    /**
     * @param string $price
     * @param string $format
     * @return string
     */
    private function processPrice($price, $format)
    {
        return $price;
    }

    /**
     * @param string $number
     * @param string $format
     * @return int
     */
    private function processNumber($number, $format)
    {
        return $number;
    }
}