<?php

include "..\service\Autoloader.php";

use observer\observ\Applicant;

spl_autoload_register([new observer\service\Autoloader(), 'loadClass']);

/*1. Наблюдатель: есть сайт HandHunter.gb.
На нем работники могут подыскать себе вакансию РНР-программиста.
Необходимо реализовать классы искателей с их именем, почтой и стажем работы.
Также реализовать возможность в любой момент встать на биржу вакансий (подписаться на уведомления),
либо же, напротив, выйти из гонки за местом.
Таким образом, как только появится новая вакансия программиста,
все жаждущие автоматически получат уведомления на почту (можно реализовать условно).*/

$a = new \observer\entity\Vacancy('Horns and hooves', "php developer");

$b = new Applicant("Vasia", "darkangel@mail.com", 10);
$c = new Applicant("Sasha", "darkangel@mail.com", 2);

//var_dump($b);
$a->attach($b);
$a->attach($c);

$a->openVacancy();

