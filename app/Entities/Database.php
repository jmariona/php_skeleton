<?php

namespace Entities;


class Database
{
    private $connect;

    public function connection_start()
    {
        $this->connect = null;

        try {
            $this->connect = new \PDO(
                'pgsql:host='.getenv('DB_HOST')
                .';port='.getenv('DB_PORT')
                .';dbname='.getenv('DB_NAME')
                .';user='.getenv('DB_USERNAME')
                .';password='.getenv('DB_PASSWORD')
            );

            $this->connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_PERSISTENT);
            print_r('conection are stablished');
        } catch (\PDOException $exception) {
            echo $exception;
        }

        return $this->connect;
    }

    public function connection_stop()
    {
        $this->connect;
    }
}