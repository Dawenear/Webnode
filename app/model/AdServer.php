<?php

namespace App\Model;

use Core\Database\Database;

class AdServer extends Database
{
    /** @var integer */
    private $id;
    /**
     * @var string
     * only for easier recognition
     */
    private $name;
    /** @var string */
    private $url;
    /**
     * @var string
     * saved as Json - easy to process back from string
     * see example structure in structures/AdServer/options.json
     */
    private $options;
    /**
     * @var string
     * xml / json / ...
     */
    private $outputType;
    /**
     * @var string
     * saved as Json - easy to use
     * see example structure in structures/AdServer/returnStructure.json
     */
    private $returnStructure;

    /**
     * @param int $id
     * @param string $name
     * @param string $url
     * @param array $options
     * @param string $outputType
     */
    public function setNewAdServer($id, $name, $url, $options, $outputType)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setUrl($url);
        $this->setOptions($options);
        $this->setOutputType($outputType);
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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return json_decode($this->options);
    }

    /**
     * @param
     * array $options
     */
    public function setOptions($options)
    {
        $this->options = json_encode($this->processOptions($options));
    }

    /**
     * @return string
     */
    public function getOutputType()
    {
        return $this->outputType;
    }

    /**
     * @param string $outputType
     */
    public function setOutputType($outputType)
    {
        $this->outputType = $outputType;
    }

    /**
     * @param string|array $options
     * @return array
     */
    private function processOptions($options)
    {
        // detect it array, if not make array from string
        $options = [];
        return $options;
    }

    /**
     * @return array
     */
    public function getReturnStructure()
    {
        return json_decode($this->returnStructure);
    }

    /**
     * @param array $returnStructure
     */
    public function setReturnStructure($returnStructure)
    {
        $this->returnStructure = json_encode($returnStructure);
    }

}
