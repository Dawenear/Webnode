<?php

namespace Core\Database;

use Core\Exceptions\DatabaseError;

abstract class Database
{
    private $connection;

    public function __construct()
    {
        $config = $this->getConfig();
        $this->connection = new mysqli($config['serverName'], $config['userName'], $config['password'], $config['dbName']);
        if ($this->connection->connect_error) {
            throw new DatabaseError();
        }
    }

    /**
     * @return Database
     */
    public function getAll()
    {
        return $data;
    }

    /**
     * @return array
     * Load config info from config file
     */
    protected function getConfig()
    {
        return $config;
    }

    /**
     * @param integer $id
     * @return Database
     */
    public function getOneById($id)
    {
        return $data;
    }

    /**
     * @param array $params
     * get params as array ['columnName' => 'value']
     * @return Database[]
     */
    public function getByParameters($params)
    {
        return $data;
    }
}