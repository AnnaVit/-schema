<?php

namespace factory\database\Oracle;

use factory\database\dbInterface\IDBConnection;

class OracleConnection implements IDBConnection
{
    public function DBConnection(): string
    {
        return "Подключение к Oracle";
    }
}