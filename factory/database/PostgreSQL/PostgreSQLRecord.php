<?php

namespace factory\database\PostgreSQL;

use factory\database\dbInterface\IDBRecord;

class PostgreSQLRecord implements IDBRecord
{
    public function addDb(): string
    {
        return "Добавили в бд PostgreSQL";
    }

    public function deleteDb(): string
    {
        return "Удалили из бд PostgreSQL";
    }

    public function updDb(): string
    {
        return "Обновили в бд PostgreSQL";
    }
}