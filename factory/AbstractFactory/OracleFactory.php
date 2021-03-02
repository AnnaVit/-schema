<?php

namespace factory\AbstractFactory;

use factory\database\dbInterface\IDBConnection;
use factory\database\dbInterface\IDBRecord;
use factory\database\dbInterface\IDBQueryBuilder;
use factory\database\Oracle\OracleConnection;
use factory\database\Oracle\OracleRecord;
use factory\database\Oracle\OracleQueryBuilder;

class OracleFactory implements AbstractFactory
{
    public function DBConnection(): IDBConnection
    {
        return new OracleConnection();
    }

    public function DBRecord(): IDBRecord
    {
        return new OracleRecord();
    }

    public function DBQueryBuilder(): IDBQueryBuilder
    {
        return new OracleQueryBuilder();
    }
}