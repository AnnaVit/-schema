<?php

namespace factory\AbstractFactory;

use factory\database\dbInterface\IDBConnection;
use factory\database\dbInterface\IDBRecord;
use factory\database\dbInterface\IDBQueryBuilder;
use factory\database\PostgreSQL\PostgreConnection;
use factory\database\PostgreSQL\PostgreSQLRecord;
use factory\database\PostgreSQL\PostgreSQLQueryBuilder;

class PostgreSQLFactory implements AbstractFactory
{
    public function DBConnection(): IDBConnection
    {
        return new PostgreConnection();
    }

    public function DBRecord(): IDBRecord
    {
        return new PostgreSQLRecord();
    }

    public function DBQueryBuilder(): IDBQueryBuilder
    {
        return new PostgreSQLQueryBuilder();
    }
}