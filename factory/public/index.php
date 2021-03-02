<?php

include "..\service\Autoloader.php";

use factory\AbstractFactory\MySQLFactory;

spl_autoload_register([new factory\service\Autoloader(), 'loadClass']);

$mysql = new MySQLFactory();

$mysql->DBConnection();
$mysql->DBRecord();

echo $mysql->DBConnection()->DBConnection();
echo $mysql->DBRecord()->addDb();