<?php

namespace factory\database\PostgreSQL;

use factory\database\dbInterface\IDBConnection;

class PostgreConnection implements IDBConnection
{
    public function DBConnection(): string
    {
        return "Подключение к PostgreSQL";
    }
}