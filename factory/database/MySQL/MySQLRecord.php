<?php

namespace factory\database\MySQL;


use factory\database\dbInterface\IDBRecord;


class MySQLRecord implements IDBRecord
{
    public function addDb(): string
    {
        return "Добавили в бд MySQL";
    }

    public function deleteDb(): string
    {
        return "Удалили из  MySQL";
    }

    public function updDb(): string
    {
        return "Обновили в бд MySQL";
    }
}