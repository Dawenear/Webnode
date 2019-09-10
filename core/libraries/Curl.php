<?php

namespace Core\Libraries;

class Curl
{
    /** @var  */
    private $curl;

    /**
     * Curl constructor.
     * @param string $url
     */
    public function __construct($url)
    {
        $this->curl = curl_init();
        // initiate curl
        // set basic thing like url and others ...
        $this->setOptions(['CURLOPT_URL' => $url, '...']);
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        // foreach $options as $key => $value
        // set option named $key to $value
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        // curl exec
        // curl close
        // return curl response
        return $data;
    }
}
