<?php

namespace factory\database\Oracle;

use factory\database\dbInterface\IDBRecord;

class OracleRecord implements IDBRecord
{
    public function addDb(): string
    {
        return "Добавили в бд Oracle";
    }

    public function deleteDb(): string
    {
        return "Удалили из бд Oracle";
    }

    public function updDb(): string
    {
        return "Обновили в бд Oracle";
    }
}