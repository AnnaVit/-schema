<?php

namespace factory\database\MySQL;

use factory\database\dbInterface\IDBConnection;

class MySQLConnection implements IDBConnection
{
    public function DBConnection(): string
    {
        return "Подключение к MySQL";
    }
}