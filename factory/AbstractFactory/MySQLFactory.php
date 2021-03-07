<?php

namespace factory\AbstractFactory;

use factory\database\dbInterface\IDBConnection;
use factory\database\dbInterface\IDBRecord;
use factory\database\dbInterface\IDBQueryBuilder;
use factory\database\MySQL\MySQLConnection;
use factory\database\MySQL\MySQLRecord;
use factory\database\MySQL\MySQLQueryBuilder;

class MySQLFactory implements AbstractFactory
{
    public function DBConnection(): IDBConnection
    {
        return new MySQLConnection();
    }

    public function DBRecord(): IDBRecord
    {
        return new MySQLRecord();
    }

    public function DBQueryBuilder(): IDBQueryBuilder
    {
        return new MySQLQueryBuilder();
    }
}